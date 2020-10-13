<%EnableSessionState=False
host = Request.ServerVariables("HTTP_HOST")

if host = "iteamece.com" or host = "www.iteamece.com" then response.redirect("https://www.iteamece.fr/")

else
response.redirect("https://www.iteamece.fr/error.htm")
end if
%>