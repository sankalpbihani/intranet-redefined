package com.example.my_first_database;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.Locale;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONObject;

import android.support.v7.app.ActionBarActivity;
import android.support.v7.app.ActionBar;
import android.support.v4.app.Fragment;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.os.Build;

public class MainActivity3 extends ActionBarActivity {
	
	TextView resultView1;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.fragment_main_activity3);
		
		String var_name = this.getIntent().getExtras().getString("user_name");
		String var_dept = this.getIntent().getExtras().getString("user_dept");

		 //String date = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
		resultView1 = (TextView) findViewById(R.id.activity);
	
Button sButton = (Button) findViewById(R.id.go_back2);
Log.e("Pass4","connection success");

		sButton.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v) {
	        	   String var_name = getIntent().getExtras().getString("user_name");
	       		   String var_dept = getIntent().getExtras().getString("user_dept");
	        	   Intent j=new Intent(MainActivity3.this, com.example.my_first_database.MainActivity1.class);
	        	   j.putExtra("user_name", var_name);
	        	   j.putExtra("user_dept", var_dept);
	        	   startActivity(j);
	               finish();
	           }
	        });
		 
		 set_date();
		 
	}
	
	public void set_date()
	{
		//String currentDate= "";
		String date = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
		//currentDate = new SimpleDateFormat("dd-MM-yyyy", Locale.getDefault()).format(new Date());
		//Calendar c = Calendar.getInstance(); 
		//int seconds = c.get(Calendar.SECOND);
		//int year = c.get(Calendar.YEAR);
		//int month = c.get(Calendar.MONTH);
		//int day = c.get(Calendar.DATE);
		
		//s = s + "Department : "+json.getString("department")+"\nDay : "+json.getString("day")+"\nClass1 : "+json.getString("class1")+"\nClass2 : "+json.getString("class2")+"\nClass3 : "+json.getString("class3")+"\nClass4 : "+json.getString("class4")  +"\n\n";
		
		//currentDate = currentDate + year + ":" + month + ":" + day   ;
		
		String store="";
		InputStream isr = null;
		
		try{
			HttpClient httpclient = new DefaultHttpClient();
            HttpPost httppost = new HttpPost("http://10.0.2.2/database2.php?date="+date); //YOUR PHP SCRIPT ADDRESS 
            HttpResponse response = httpclient.execute(httppost);
            HttpEntity entity = response.getEntity();
            isr = entity.getContent();
            Log.e("Pass1","connection success");
	    }
	    catch(Exception e){
	            Log.e("log_tag", "Error in http connection "+e.toString());
	            
	    }
	    //convert response to string
	    try{
            
            /*String link = "http://10.0.2.2/database1.php?username="+username;
            URL url = new URL(link);
            HttpClient client = new DefaultHttpClient();
            HttpGet request = new HttpGet();
            request.setURI(new URI(link));
            HttpResponse response = client.execute(request);*/
            
            BufferedReader in = new BufferedReader(new InputStreamReader(isr,"iso-8859-1"),8);
           // BufferedReader in = new BufferedReader(new InputStreamReader(response.getEntity().getContent()));

           /*StringBuffer sb = new StringBuffer("");
           String line="";
           while ((line = in.readLine()) != null) {
              sb.append(line);
            }
            in.close();*/
            StringBuilder sb = new StringBuilder();
            String line = null;
            while ((line = in.readLine()) != null) {
                    sb.append(line + "\n");
            }
            isr.close();
     
            store=sb.toString();
            
            //store= sb.toString();
            
            String s = "";
     	   JSONArray jArray = new JSONArray(store);
     	   
     	   for(int i=0; i<jArray.length();i++){
     		   JSONObject json = jArray.getJSONObject(i);
     		   s = s + 
     				  
     				   "Date : "+json.getString("date")+"\nEvents : "+json.getString("activity") +"\n\n";
     	   }
     	  resultView1.setText(s);
            
      }catch(Exception e){
    	  Log.e("log_tag", "Error  converting result "+e.toString());
      }
		
	
	}

}
