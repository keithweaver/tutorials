package com.freecodingtutorials.parsetemplate;

import android.util.Log;
import com.parse.Parse;

/**
 * Created by Keith Weaver on 2015-06-23.
 */
public class Application extends android.app.Application {
    public static String TAG = "Application_";
    public void onCreate() {
        super.onCreate();
        try {
            Parse.initialize(this, "ACnXHKlS8m40Xppjus7W21FJes5Fjw7cKdxA2sBX", "XxPYpJBO1XC3yqMs0l1FAUvXpM3wYqN8E7Gjf2Pq");
        }catch (Exception e){
            Log.e(TAG, e.toString());
        }
    }
}
