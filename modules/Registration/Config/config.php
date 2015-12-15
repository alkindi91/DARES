<?php
$email_header = <<<EOF
<div>
عزيزي المتقدم : {name}
رقم التتبع : {tracking_number}
</div>
EOF;
$email_footer = <<<EOF
إذا كان لديكم أي استفسار، أو واجهتكم صعوبة في الإجراءات؛ لا تتردد في التواصل معنا من خلال فريق الدعم الفني عبر إحدى الطرق الآتية:

    خدمة الاستفسار [<a href='http://iiselearning.net'>اضغط هنا</a>].
    إرسال رسالة عبر البريد الإلكتروني الآتي <a href="mailto:admission@css.edu.om">admission@css.edu.om</a> مع ضرورة كتابة الاسم ورقم التتبع بوضوح.
    أو الاتصال مباشرة على أحد الهواتف الآتية: 00968/24393777
    أو الحضور مباشرة إلى مقر الكلية من 8:30 صباحاً حتى 1.30 ظهرًا من الأحد إلى الخميس.

EOF;
return [
	'session_key'=>'registration',
	'name' => 'Registration',
	'email_header'=>$email_header,
	'email_footer'=>$email_footer,
	'stay_types'=>[
		'work'=>'عمل',
		'companion'=>'مرافق',
		'tourism'=>'سياحة',
		'non_resident'=>'غير مقيم',
	],
	'files'=>[
		'types'=>[
			'nid'=>'الهوية (بطاقة أو جواز سفر)',
			'photo'=>'الصورة شخصية',
			'certificate'=>'الشهادة',
			'transcript'=>'كشف الدرجات',
			'job'=>'شهادة العمل',
			'marriage'=>'وثيقة الزواج',
			'receipt'=>'إيصال سداد رسوم التسجيل (إذا كنت دفعت)',
		]
	],
	'skill_levels'=>[
		'excellent'=>'ممتاز' ,
		'great'=>'جيد جدا' ,
		'very_low'=>'ضعيف جدا' ,
		'low'=>'ضعيف' ,'good'=>'جيد'
	],
	'social_status'=>[
		'single'=>'أعزب' ,
		'married'=>'متزوج / متزوجة' ,
		'divorced'=>'مطلق / مطلقة' ,
		'widow'=>'أرمل /أرملة'
	]
];