package com.br.nwk.falagalera.repository;

import android.content.Context;
import android.util.Log;

import com.br.nwk.falagalera.util.Constants;
import com.the9tcat.hadi.DefaultDAO;

public class DataManager {
	
	private DefaultDAO dao;
	
	private static DataManager instance;
	
	public DataManager(Context context){
		dao = new DefaultDAO(context);
	}
	
	public static DataManager getInstance(Context context){
		if (instance == null){
			instance = new DataManager(context);
		}
		return instance;
	}
}
