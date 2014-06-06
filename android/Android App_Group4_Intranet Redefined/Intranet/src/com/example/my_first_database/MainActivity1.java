package com.example.my_first_database;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.URI;
import java.net.URL;
import java.util.Calendar;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONObject;

import android.support.v7.app.ActionBarActivity;
import android.support.v7.app.ActionBar;
import android.support.v4.app.Fragment;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.os.StrictMode;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;
import android.os.Build;

public class MainActivity1 extends ActionBarActivity {

	TextView resultView1;
	TextView resultView2;
	
	
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.fragment_main_activity1);
		StrictMode.enableDefaults();
		resultView1 = (TextView) findViewById(R.id.show);
		//resultView2 = (TextView) findViewById(R.id.show_data);
	    String var_name = this.getIntent().getExtras().getString("user_name");
		String var_dept = this.getIntent().getExtras().getString("user_dept");
		String weekDay = "";

	    Calendar c = Calendar.getInstance();
	    int dayOfWeek = c.get(Calendar.DAY_OF_WEEK);

	    if (Calendar.MONDAY == dayOfWeek) {
	        weekDay = "Monday";
	    } else if (Calendar.TUESDAY == dayOfWeek) {
	        weekDay = "Tuesday";
	    } else if (Calendar.WEDNESDAY == dayOfWeek) {
	        weekDay = "Wednesday";
	    } else if (Calendar.THURSDAY == dayOfWeek) {
	        weekDay = "Thursday";
	    } else if (Calendar.FRIDAY == dayOfWeek) {
	        weekDay = "Friday";
	    } else if (Calendar.SATURDAY == dayOfWeek) {
	        weekDay = "Saturday";
	    } else if (Calendar.SUNDAY == dayOfWeek) {
	        weekDay = "Sunday";
	    }
	    
	    //resultView2.setText(weekDay);
		
		//String var_name = this.getIntent().getExtras().getString("user_name");
		//String var_dept = this.getIntent().getExtras().getString("user_dept");
		Button sButton = (Button) findViewById(R.id.button_home);
		Button s1Button = (Button) findViewById(R.id.goto_timetable);
		Button s2Button = (Button) findViewById(R.id.goto_activity);
		Button s3Button = (Button) findViewById(R.id.goto_moodle);
		Button s4Button = (Button) findViewById(R.id.goto_hospital);
		Button s5Button = (Button) findViewById(R.id.goto_pydio);
		
		resultView1.setText(var_name);
		
		//send_data(var_name , var_dept , weekDay);
		
		 sButton.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v) {
	        	   Intent j=new Intent(MainActivity1.this, com.example.my_first_database.MainActivity.class);
	               startActivity(j);
	               finish();
	           }
	        });
		 s1Button.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v1) {
	        	   String var_name = getIntent().getExtras().getString("user_name");
	       		   String var_dept = getIntent().getExtras().getString("user_dept");
	        	   Intent j1=new Intent(MainActivity1.this, com.example.my_first_database.MainActivity2.class);
	        	   j1.putExtra("user_name", var_name);
	        	   j1.putExtra("user_dept", var_dept);
	               startActivity(j1);
	               finish();
	           }
	        });
		 s4Button.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v1) {
	        	   try{  
				    	  Intent browserIntent = new Intent(Intent.ACTION_VIEW, Uri.parse("http://10.0.2.2/hospital/user/user_home.php"));
				    	  startActivity(browserIntent);
				    	  Log.e("pass3","connection success");
				    	  }
				    	  catch (Exception e){
				    		  Toast.makeText(getApplicationContext(), "Problem Loading...", 
								      Toast.LENGTH_SHORT).show();
				    	  }
	           }
	        });
		 s2Button.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v2) {
	        	   String var_name = getIntent().getExtras().getString("user_name");
	       		   String var_dept = getIntent().getExtras().getString("user_dept");
	        	   Intent j2=new Intent(MainActivity1.this, com.example.my_first_database.MainActivity3.class);
	        	   j2.putExtra("user_name", var_name);
	        	   j2.putExtra("user_dept", var_dept);
	               startActivity(j2);
	               Log.e("pass6","connection success");
	               finish();
	           }
	        });
		 s3Button.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v1) {
	        	   try{      
	        			  Intent intent = getPackageManager().getLaunchIntentForPackage("com.moodle.moodlemobile");
	        			        
	        			        	 startActivity(intent);
	        			        	 finish();
	        			  }
	        			  catch (Exception e){
	        				  Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse("market://details?id=com.moodle.moodlemobile"));
	        				  startActivity(intent);
	        				  finish();
	        			  }
	           }
	        });
		 s5Button.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v1) {
	        	   try{      
	        			  Intent intent = getPackageManager().getLaunchIntentForPackage("com.pydio.android.Client‎");
	        			        
	        			        	 startActivity(intent);
	        			        	 finish();
	        			  }
	        			  catch (Exception e){
	        				  Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse("market://details?id=com.pydio.android.Client‎"));
	        				  startActivity(intent);
	        				  finish();
	        			  }
	           }
	        });
	}
	
	/*public void send_data(String username, String department, String weekDay){
		
		String store="";
		InputStream isr = null;
		
		try{
			HttpClient httpclient = new DefaultHttpClient();
            HttpPost httppost = new HttpPost("http://10.0.2.2/database1.php?deptname="+department+"&day="+weekDay); //YOUR PHP SCRIPT ADDRESS 
            HttpResponse response = httpclient.execute(httppost);
            HttpEntity entity = response.getEntity();
            isr = entity.getContent();
            Log.e("Pass1","connection success");
	    }
	    catch(Exception e){
	            Log.e("log_tag", "Error in http connection "+e.toString());
	            resultView2.setText("Couldnt connect to database");
	    }
	    //convert response to string
	    try{
            
            /*String link = "http://10.0.2.2/database1.php?username="+username;
            URL url = new URL(link);
            HttpClient client = new DefaultHttpClient();
            HttpGet request = new HttpGet();
            request.setURI(new URI(link));
            HttpResponse response = client.execute(request);*/
            
          /*  BufferedReader in = new BufferedReader(new InputStreamReader(isr,"iso-8859-1"),8);
           // BufferedReader in = new BufferedReader(new InputStreamReader(response.getEntity().getContent()));

           /*StringBuffer sb = new StringBuffer("");
           String line="";
           while ((line = in.readLine()) != null) {
              sb.append(line);
            }
            in.close();*/
           /* StringBuilder sb = new StringBuilder();
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
     				  
     				   "Department : "+json.getString("department")+"\nDay : "+json.getString("day")+"\nClass1 : "+json.getString("class1")+"\nClass2 : "+json.getString("class2")+"\nClass3 : "+json.getString("class3")+"\nClass4 : "+json.getString("class4")  +"\n\n";
     	   }
     	  resultView2.setText(s);
            
      }catch(Exception e){
    	  Log.e("log_tag", "Error  converting result "+e.toString());
      }
		
			
		}
	/*public void go_home(View v){
		
		Intent j=new Intent(MainActivity1.this, com.example.my_first_database.MainActivity.class);
       
        startActivity(j);
	}*/
	
	

}
