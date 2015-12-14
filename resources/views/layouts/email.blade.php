<!DOCTYPE html>
<html lang="ar" dir='rtl'>
<head>
	<meta charset="UTF-8">
	<title>@lang('global.title')</title>
</head>
<body style='background-color:#f9f9f9;direction:rtl;font-size:13px;font-family:"Droid Arabic Naskh";;padding:30px 0'>
<div style='max-width:600px;border:solid #dfdfdf 1px;margin:50px auto'>
	<div style='text-align:center;margin-bottom:20px;border-bottom:solid #dfdfdf 1px;padding:20px'>
		<img src="http://iiselearning.net/cms/images/elearn/logo2.png" alt="@lang('global.title')">
	</div>
	<div style='padding:20px'>
	@yield('content')
	</div>
</div>
</body>
</html>