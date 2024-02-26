<!-- Registration--!>
$(document).ready(function(e){
   
	$("#regform").validate({		
		
		rules:{
			
			   'name':{
				   required:true,				   
				   },
			   'email':{
				   required:true
				   
				   },
				'pwd':{
					required:true
					},
			  	'city':{
					required:true					
					},
				'state':{
					required:true
					},
				'country':{
					required:true					
					},
					
				'zip':{
					required:true					
					},
				'contact':{
					required:true					
					},	
				'gen':{
					required:true					
					},
				'about':{
					required:true					
					},	
	
					
			}
		
		
		});
		
		
		
		$("#loginform").validate({		
		
		rules:{
			
			   
			   'email':{
				   required:true
				   
				   },
				'pwd':{
					required:true
					},
			  	
					
			}
		
		
		});
		
		
		$("#forgotform").validate({		
		
		rules:{
			
			  
			   'email':{
				   required:true
				   
				   },
				
			  	'sq':{
					required:true					
					},
				'ans':{
					required:true
					},
					
			}
		
		
		});
		
		
		
		
		$("#changeform").validate({		
		
		rules:{
			
			   
				'opwd':{
					required:true
					},
					
					'npwd':{
					required:true
					},
					'cpwd':{
					required:true
					},
			  	
			}
		
		
		});
		
		
		$("#devlogform").validate({		
		
		rules:{
			
			   
			   'empid':{
				   required:true
				   
				   },
				'pwd':{
					required:true
					},
			  	
					
			}
		
		
		});
		
		
		$("#devforgotform").validate({		
		
		rules:{
			
			  
			   'empid':{
				   required:true
				   
				   },
				
			  	'sq':{
					required:true					
					},
				'ans':{
					required:true
					},
					
			}
		
		});		
		
		$("#devchangeform").validate({		
		
		rules:{
			
			   
					'opwd':{
					required:true
					},
					
					'npwd':{
					required:true
					},
					'cpwd':{
					required:true
					},
			  	
			}
		
		
		});
		


 $("#adminlogform").validate({		
		
		rules:{
			
			   
			   'uid':{
				   required:true
				   
				   },
				'pwd':{
					required:true
					},
			  	
					
			}
		
		
		});




$("#contactform").validate({		
		
		rules:{
			
			   'feedbackid':{
				   required:true,				   
				   },
			   'name':{
				   required:true
				   
				   },
				'email':{
					required:true
					},
			  	'contactno':{
					required:true					
					},
				'subject':{
					required:true
					},
				'msg':{
					required:true					
					},
					
				'dateofmsg':{
					required:true					
					},
							}
		
		
		});
		
		
		$("#adminchangeform").validate({		
		
		rules:{
			
			   
					'opwd':{
					required:true
					},
					
					'npwd':{
					required:true
					},
					'cpwd':{
					required:true
					},
			  	
			}
		
		
		});
		

});
