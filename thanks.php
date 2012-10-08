<html>
<head><title> Gracias! </title></head>
<body>
<script language="php">
$email = $HTTP_POST_VARS[email];
$mailto = "alicia.gonzalez.90@gmail.com";
$mailsubj = "Form submission";
$mailhead = "From: $email\n";
reset ($HTTP_POST_VARS);
$mailbody = "Values submitted from web site form:\n";
while (list ($key, $val) = each ($HTTP_POST_VARS)) { $mailbody .= "$key : $val\n"; }
if (!eregi("\n",$HTTP_POST_VARS[email])) { mail($mailto, $mailsubj, $mailbody, $mailhead); }
</script>

<h1> Gracias! </h1>

</body>
</html>