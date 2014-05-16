package com.br.nwk.falagalera.model;

import java.io.Serializable;

import com.the9tcat.hadi.annotation.Column;
import com.the9tcat.hadi.annotation.Table;

@Table(name="user")
public class User implements Serializable{
	
	@Column(autoincrement=true)
	private Long id;
	
	@Column(name="id_user")
	private Integer idUser;
	
	@Column(name="nickname")
	private String nickname;
	
	@Column(name="picture")
	private String picture;
	
	public Long getId() {
		return id;
	}
	public void setId(Long id) {
		this.id = id;
	}
	public Integer getIdUser() {
		return idUser;
	}
	public void setIdUser(Integer idUser) {
		this.idUser = idUser;
	}
	public String getNickname() {
		return nickname;
	}
	public void setNickname(String nickname) {
		this.nickname = nickname;
	}
	public String getPicture() {
		return picture;
	}
	public void setPicture(String picture) {
		this.picture = picture;
	}
}
