<!DOCTYPE html>  <!-- URL github is:  https://github.com/kavousimahdy    create date:1395/11/18 -->
<script src="https://code.jquery.com/jquery-git.js" ></script>
<html>
<head>
    <title>game With javascript</title>
</head>

<body>
<html>
<body>
<div id="counts" style="position: fixed;left: 50%">click counts</div>
<div id='resultColumn'>
    ستون
</div>
<div id='resultRow'>
    ردیف
</div>
<?php
$c = 0;
$first = "data-first='first'";
for ($i = 0; $i < 1368; $i++) {
	echo "<button  id='$i' $first  class='$c' style='margin-right:5px;width:20px;height: 20px'></button>";
    if ($i % 57 == 0)
    {
        $class = "$c";
        $c++;
        $first = "data-first='first'";
        echo "<br />";
    }
    else
    {
        $first = '';
    }

}
?>
<a href="https://github.com/kavousimahdy">go to github kavousi.mahdy</a>
</body>
</html>
<script>
    var NumberColumn,
        getFirstData,
        getFirstDataLength,
        getClassNameRow,
        getIdFirstData,
        i = 0,
        counts = 0;
    getFirstData = document.querySelectorAll("[data-first]");
    getFirstDataLength = document.querySelectorAll("[data-first]").length;
    NumberColumn = Math.floor(Math.random() * 24);
    getClassNameRow = document.getElementsByClassName(NumberColumn);
    getClassNameRowLength = document.getElementsByClassName(NumberColumn).length;

    for (; i < getClassNameRowLength; i++) {
        if (getClassNameRow[i].getAttribute('data-first')) {
            getIdFirstData = getClassNameRow[i].id;
            numberRow = Math.floor(parseInt(getIdFirstData) + (Math.random() * 56));
        }
    }
    console.dir(NumberColumn);
    console.dir(numberRow);
    i = 0;
    for (; i < 1334; i++) {
        document.getElementById(i).onclick = function () {
            if (NumberColumn == this.className) {
                document.getElementById('resultColumn').innerHTML = 'ستون پیدا شد';
                first =  parseInt($(this).prevAll('[data-first="first"]').first().attr('id'));
                //console.dir(first);
                nextFirst =  $(this).nextAll('[data-first="first"]').first().attr('id');
                //console.dir(nextFirst);
                $("button").each(function () {
                    console.dir(parseInt($(this).attr('id')));
                    if(!(parseInt($(this).attr('id')) > first && parseInt($(this).attr('id')) < nextFirst) )
                    {
                        $(this).hide();
                    }
                });

                if (numberRow == this.id) {
                    this.style.backgroundColor = "green";
                    alert('تبریک شما برنده شدید');
                    document.getElementById('resultRow').innerHTML = 'عرض پیدا شد';
                    var green = true;
                } else if (numberRow > this.id) {
                    document.getElementById('resultRow').innerHTML = 'برو راست';
                } else if (numberRow < this.id) {
                    document.getElementById('resultRow').innerHTML = 'برو چپ';
                }
            } else if (NumberColumn < this.className) {
                document.getElementById('resultColumn').innerHTML = 'برو بالا';
            } else if (NumberColumn > this.className) {
                document.getElementById('resultColumn').innerHTML = 'برو پایین';
            }
            if (!green) {
                this.style.backgroundColor = 'blue';
            }
            counts++;
            document.getElementById('counts').innerHTML = counts;
        }
    }
</script>