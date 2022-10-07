package com.phoenix.signup;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class RegistrationServlet
 */
@WebServlet("/register")
public class register extends HttpServlet {
	private static final long serialVersionUID = 1L;
       

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		String uname = request.getParameter("name");
		String uemail = request.getParameter("email");
		String upwd = request.getParameter("pass");
		String umobile = request.getParameter("Contact");
		RequestDispatcher dispatch = null;
		connection con = null;

		
		try {
			Class.forName("com.msql.cj.jdbc.Driver"); 
			Connection con1 = DriverManager.getConnection("jdbc:mysql://localhost:3306/flight_booking_db","root","", null);
			PreparedStatment pst = (PreparedStatment) con1.prepareStatement("insert into user(uname,upwd,uemail,umobile) values(?.?,?,?, )");
			pst.setString(1, uname);
	        pst.setString(2, upwd);
			pst.setString(3, uemail);
			pst.setString(4, umobile);
			
			int rowCont = ((PreparedStatement) pst).executeUpdate();
			int rowCount = 0;
			dispatch = request.getRequestDispatcher("registration.jsp");
			if (rowCount > 0) {
				Object requset = null;
				 ((ServletRequest) requset).setAttribute("status","success");
				
			}else {
				((ServletRequest) request).setAttribute("status","filed");
				
			}
			RequestDispatcher dispatcher = null;
			dispatcher.forward(request,response);
		} catch(Exception e){
			e.printStackTrace();
			
		}finally {
			try {
				con.close();
				catch(SQLException e){
					
					e.printStackTrace();
				}
				
			}	
		
		
	}
}

