package com.example.my_first_database;
import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONObject;

import android.content.Intent;
import android.os.StrictMode;
import android.util.Log;
import android.support.v7.app.ActionBarActivity;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends ActionBarActivity {
	
	   private EditText  username=null;
	   private EditText  password=null;
	   private Integer check = 0;
	   
	TextView resultView;
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.fragment_main);
		
		Button sButton = (Button) findViewById(R.id.button1);
		 username = (EditText)findViewById(R.id.username);
	      password = (EditText)findViewById(R.id.password);
		StrictMode.enableDefaults();
		//resultView = (TextView) findViewById(R.id.result);
		//getData();
		
		sButton.setOnClickListener(new View.OnClickListener() {
	           public void onClick(View v) {
	        	   String result = "";
	           	InputStream isr = null;
	       		
	           	try{
	                   HttpClient httpclient = new DefaultHttpClient();
	                   HttpPost httppost = new HttpPost("http://10.0.2.2/database.php"); //YOUR PHP SCRIPT ADDRESS 
	                   HttpResponse response = httpclient.execute(httppost);
	                   HttpEntity entity = response.getEntity();
	                   isr = entity.getContent();
	                   Log.e("Pass1","connection success");
	           }
	           catch(Exception e){
	                   Log.e("log_tag", "Error in http connection "+e.toString());
	                   resultView.setText("Couldnt connect to database");
	           }
	           //convert response to string
	           try{
	                   BufferedReader reader = new BufferedReader(new InputStreamReader(isr,"iso-8859-1"),8);
	                   StringBuilder sb = new StringBuilder();
	                   String line = null;
	                   while ((line = reader.readLine()) != null) {
	                           sb.append(line + "\n");
	                   }
	                   isr.close();
	            
	                   result=sb.toString();
	                   Log.e("pass2","connection success");
	           }
	           catch(Exception e){
	                   Log.e("log_tag", "Error  converting result "+e.toString());
	           }
	            
	           //parse json data
	          try {
	       	   String s = "";
	       	   JSONArray jArray = new JSONArray(result);
	       	   
	       	   for(int i=0; i<jArray.length();i++){
	       		   JSONObject json = jArray.getJSONObject(i);
	       		   s = s + 
	       				  
	       				   "Webmail ID : "+json.getString("user_id")+"\n"+
	       				   "Password : "+json.getString("password")+"\n\n";
	       				   
	       	   }
	       	   
	       	   String text_user = "";
	       	   String text_pass = "";
	       	   String text_dept = "";
	       	   int counter = 0;
	       	   JSONArray jArray1 = new JSONArray(result);
	       	   
	       	   for(int i=0; i<jArray1.length();i++){
	       		   JSONObject json1 = jArray.getJSONObject(i);
	       		   text_user = json1.getString("user_id");
	       		   text_pass = json1.getString("password");
	       		   text_dept = json1.getString("department");
	       		   
	       		   if(username.getText().toString().equals(text_user) && 
	       				      password.getText().toString().equals(text_pass) && check<3){
	       				      Toast.makeText(getApplicationContext(), "Redirecting...", 
	       				      Toast.LENGTH_SHORT).show();
	       				      counter++;
	       				      break;
	       				   }	
	       	   }
	       	   if(counter == 0 && check<3)
	       	   {
	       		   Toast.makeText(getApplicationContext(), "Wrong Credentials",
	       				      Toast.LENGTH_SHORT).show();
	       		   			check++;
	       	   }
	       	   
	       	   if(check==3)
	       	   {
	       		   Toast.makeText(getApplicationContext(), "No more trials left!",
	       				      Toast.LENGTH_SHORT).show();
	       	   }
	       	   //resultView.setText(text_user);
	       	   
	       	   if(counter != 0)
	       	   {
	       		    //resultView.setText("hello");
	       	        Intent i=new Intent(MainActivity.this, com.example.my_first_database.MainActivity1.class);
	       	        i.putExtra("user_name", text_user);
	       	        i.putExtra("user_dept", text_dept);
	       	        startActivity(i);
	       	        finish();
	       	   }
	       	   Log.e("pass3","connection success");
	          } catch (Exception e) {
	       	//handle exception
	       	   Log.e("log_tag", "Error Parsing Data "+e.toString());
	         
	        	   
	           }}
	        });
		
		
	}

	/*public void login(View view){
	      if(username.getText().toString().equals("admin") && 
	      password.getText().toString().equals("admin")){
	      Toast.makeText(getApplicationContext(), "Redirecting...", 
	      Toast.LENGTH_SHORT).show();
	   }	
	   else{
	      Toast.makeText(getApplicationContext(), "Wrong Credentials",
	      Toast.LENGTH_SHORT).show();
	      }

	   }*/
	
	public void login(View view){
		
		String result = "";
    	InputStream isr = null;
		
    	try{
            HttpClient httpclient = new DefaultHttpClient();
            HttpPost httppost = new HttpPost("http://10.0.2.2/database.php"); //YOUR PHP SCRIPT ADDRESS 
            HttpResponse response = httpclient.execute(httppost);
            HttpEntity entity = response.getEntity();
            isr = entity.getContent();
            Log.e("Pass1","connection success");
    }
    catch(Exception e){
            Log.e("log_tag", "Error in http connection "+e.toString());
            resultView.setText("Couldnt connect to database");
    }
    //convert response to string
    try{
            BufferedReader reader = new BufferedReader(new InputStreamReader(isr,"iso-8859-1"),8);
            StringBuilder sb = new StringBuilder();
            String line = null;
            while ((line = reader.readLine()) != null) {
                    sb.append(line + "\n");
            }
            isr.close();
     
            result=sb.toString();
            Log.e("pass2","connection success");
    }
    catch(Exception e){
            Log.e("log_tag", "Error  converting result "+e.toString());
    }
     
    //parse json data
   try {
	   String s = "";
	   JSONArray jArray = new JSONArray(result);
	   
	   for(int i=0; i<jArray.length();i++){
		   JSONObject json = jArray.getJSONObject(i);
		   s = s + 
				  
				   "Webmail ID : "+json.getString("user_id")+"\n"+
				   "Password : "+json.getString("password")+"\n\n";
				   
	   }
	   
	   String text_user = "";
	   String text_pass = "";
	   String text_dept = "";
	   int counter = 0;
	   JSONArray jArray1 = new JSONArray(result);
	   
	   for(int i=0; i<jArray1.length();i++){
		   JSONObject json1 = jArray.getJSONObject(i);
		   text_user = json1.getString("user_id");
		   text_pass = json1.getString("password");
		   text_dept = json1.getString("department");
		   
		   if(username.getText().toString().equals(text_user) && 
				      password.getText().toString().equals(text_pass) && check<3){
				      Toast.makeText(getApplicationContext(), "Redirecting...", 
				      Toast.LENGTH_SHORT).show();
				      counter++;
				      break;
				   }	
	   }
	   if(counter == 0 && check<3)
	   {
		   Toast.makeText(getApplicationContext(), "Wrong Credentials",
				      Toast.LENGTH_SHORT).show();
		   			check++;
	   }
	   
	   if(check==3)
	   {
		   Toast.makeText(getApplicationContext(), "No more trials left!",
				      Toast.LENGTH_SHORT).show();
	   }
	   //resultView.setText(text_user);
	   
	   if(counter != 0)
	   {
		    //resultView.setText("hello");
	        Intent i=new Intent(MainActivity.this, com.example.my_first_database.MainActivity1.class);
	        i.putExtra("user_name", text_user);
	        i.putExtra("user_dept", text_dept);
	        startActivity(i);
	        finish();
	   }
	   Log.e("pass3","connection success");
   } catch (Exception e) {
	//handle exception
	   Log.e("log_tag", "Error Parsing Data "+e.toString());
   }
	}

}

