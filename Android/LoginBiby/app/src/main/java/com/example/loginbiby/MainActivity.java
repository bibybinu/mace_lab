package com.example.loginbiby;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;


public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    EditText a,b;
    Button btn;
    String o,p;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        a=(EditText)findViewById(R.id.uname);
        b=(EditText)findViewById(R.id.pass);
        btn=(Button)findViewById(R.id.login);
        btn.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        String m="imbiby";
        String n="123";
        o=a.getText().toString();
        p=b.getText().toString();
        if(o.equals(m) && p.equals(n)) {
            Toast.makeText(this,"Login Success",Toast.LENGTH_SHORT).show();
        }
        else{
            Toast.makeText(this,"Login Failed",Toast.LENGTH_SHORT).show();
        }
    }
}