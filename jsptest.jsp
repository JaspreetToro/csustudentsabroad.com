
<!DOCTYPE>
<html>
<head>
<script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
</head><body>
 Hello World!<br/>
      <%
         out.println("Your IP address is " + request.getRemoteAddr());
      %>
</body>
</html>