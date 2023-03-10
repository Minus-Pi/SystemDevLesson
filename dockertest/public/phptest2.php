<?php
    print('<h1>hello world!</h1>');
    print("現在の日時は<br>");
    date_default_timezone_set('Asia/Tokyo');
    echo date('Y年m月d日 H:i:s', time());
?>
<!DOCTYPE html>
<head>
</head>
<body style="background-color: #46C2D4">
<svg id="clock-svg" width="100%" viewBox="0 0 2000 1000">	
	<defs>
		<!-- 時計部分 -->
		<g id="secondHand">
			<line id="secondHandLine" x1="0" y1="-330" x2="0" y2="0" stroke="#41B4C5" stroke-width="10" transform="rotate(0)"/>
			<animateTransform
			  		attributeName="transform"
			  		attributeType="XML"
		            type="rotate"
		            from="0" to="360"
		            dur="60s"
		            repeatCount="indefinite"/>
		</g>
		
		<g id="minuteHand">
		  <line id="minuteHandLine" x1="0" y1="-280" x2="0" y2="0" stroke="#2E818D" stroke-width="15" transform="rotate(0)"/>
		  <animateTransform
			  		attributeName="transform" 
			  		attributeType="XML"
		            type="rotate"
		            from="0" to="360"
		            dur="60min"
		            repeatCount="indefinite"/>
		</g>
		
		<g id="hourHand">
		  <line id="hourHandLine" x1="0" y1="-230" x2="0" y2="0" stroke="#2E818D" stroke-width="20" transform="rotate(0)"/>
		  <animateTransform
			  		attributeName="transform" 
			  		attributeType="XML"
		            type="rotate"
		            from="0" to="360"
		            dur="12h"
		            repeatCount="indefinite"/>
		</g>
		
		<g id="hourScale">
			<circle id="hourScaleLine" cx="3" cy="-357" r="15" stroke="none" fill="#888"/>
			<circle id="hourScaleLine" cx="0" cy="-360" r="15" stroke="none" fill="#fff"/>
		</g>

		<g id="clock">
			<!-- フレーム部分 -->
			<circle cx="4" cy="4" r="400" fill="none" stroke="#888" stroke-width="20" />
			<circle cx="0" cy="0" r="400" fill="none" stroke="#fff" stroke-width="20" />
			<!--  時間表示 -->
			<use xlink:href="#hourScale" transform="rotate(0)" />
			<use xlink:href="#hourScale" transform="rotate(30)" />
			<use xlink:href="#hourScale" transform="rotate(60)" />
			<use xlink:href="#hourScale" transform="rotate(90)" />
			<use xlink:href="#hourScale" transform="rotate(120)" />
			<use xlink:href="#hourScale" transform="rotate(150)" />
			<use xlink:href="#hourScale" transform="rotate(180)" />
			<use xlink:href="#hourScale" transform="rotate(210)" />
			<use xlink:href="#hourScale" transform="rotate(240)" />
			<use xlink:href="#hourScale" transform="rotate(270)" />
			<use xlink:href="#hourScale" transform="rotate(300)" />
			<use xlink:href="#hourScale" transform="rotate(330)" />
			<!-- 針の部分 -->
			<use xlink:href="#secondHand" transform="translate(0, 0)" />
			<use xlink:href="#minuteHand" transform="translate(0, 0)" />
			<use xlink:href="#hourHand"   transform="translate(0, 0)" />
			<circle cx="0" cy="0" r="13" fill="" stroke="#fff" stroke-width="20" />
		</g>
		<!-- /時計部分 -->

		<!-- カレンダー部分 -->
		<g id="calendarWeek">
			<text x="50"  y="0" font-size="50" fill="#E76C6C" font-weight="bold">Su</text>
			<text x="130" y="0" font-size="50" fill="#E76C6C" font-weight="bold">Mo</text>
			<text x="210" y="0" font-size="50" fill="#E76C6C" font-weight="bold">Tu</text>
			<text x="290" y="0" font-size="50" fill="#E76C6C" font-weight="bold">We</text>
			<text x="370" y="0" font-size="50" fill="#E76C6C" font-weight="bold">Th</text>
			<text x="450" y="0" font-size="50" fill="#E76C6C" font-weight="bold">Fr</text>
			<text x="530" y="0" font-size="50" fill="#E76C6C" font-weight="bold">Sa</text>
		</g>
		
		<g id="calendarDay">
			<text id="calendarDay1"  x="50"  y="0" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay2"  x="130" y="0" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay3"  x="210" y="0" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay4"  x="290" y="0"   font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay5"  x="370" y="0"   font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay6"  x="450" y="0"   font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay7"  x="530" y="0"   font-size="50" fill="#5f5f5f"></text>
			
			<text id="calendarDay8"  x="50"  y="70"  font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay9"  x="130" y="70"  font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay10" x="210" y="70"  font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay11" x="290" y="70"  font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay12" x="370" y="70"  font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay13" x="450" y="70"  font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay14" x="530" y="70"  font-size="50" fill="#5f5f5f"></text>
			
			<text id="calendarDay15" x="50"  y="140" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay16" x="130" y="140" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay17" x="210" y="140" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay18" x="290" y="140" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay19" x="370" y="140" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay20" x="450" y="140" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay21" x="530" y="140" font-size="50" fill="#5f5f5f"></text>
			
			<text id="calendarDay22" x="50"  y="210" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay23" x="130" y="210" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay24" x="210" y="210" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay25" x="290" y="210" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay26" x="370" y="210" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay27" x="450" y="210" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay28" x="530" y="210" font-size="50" fill="#5f5f5f"></text>
			
			<text id="calendarDay29" x="50"  y="280" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay30" x="130" y="280" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay31" x="210" y="280" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay32" x="290" y="280" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay33" x="370" y="280" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay34" x="450" y="280" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay35" x="530" y="280" font-size="50" fill="#5f5f5f"></text>
			
			<text id="calendarDay36" x="50"  y="350" font-size="50" fill="#5f5f5f"></text>
			<text id="calendarDay37" x="130" y="350" font-size="50" fill="#5f5f5f"></text>
		</g>

		<g id="calendar">
			<!-- 背景 -->
			<rect x="0" y="0" width="720" height="300" fill="#4ECDC4"/>
			<rect x="0" y="300" width="720" height="600" fill="#fff"/>
			<!-- 月の表示 -->
			<text id="calendarMonth" x="270" y="130" font-size="100" fill="#fff"></text>
			<!-- 年の表示　-->
			<text id="calendarYear" x="275" y="220" font-size="70" fill="#fff"></text>
			<!-- 週のラベル表示 -->
			<use xlink:href="#calendarWeek" transform="translate(50, 400)" />
			<!-- 日付表示 -->
			<use xlink:href="#calendarDay" transform="translate(50, 480)" />
		</g>
		<!-- /カレンダー部分 -->
	</defs>
	<!-- 呼び出し -->
	<use xlink:href="#clock" transform="translate(500, 550)" />
	<use xlink:href="#calendar" transform="translate(1100, 100)" />
</svg>
</body>
</html>
