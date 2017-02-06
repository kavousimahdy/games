<!DOCTYPE html>  <!-- URL github is:  https://github.com/kavousimahdy    create date:1395/11/18 -->
<html>
<head>
    <title>game With javascript</title>
</head>

<body>
<html>
<body>
<div id="counts" style="position: fixed;left: 50%">click counts</div>
<div id='resultColumn'>
    columns
</div>
<div id='resultRow'>
    rows
</div>
<?php
$c = 0;
$first = "data-first='first'";
for ($i = 0; $i < 1368; $i++) {
    if ($i % 57 == 0) {
        $class = "$c";
        $c++;
        $first = "data-first='first'";
    } else {
        $first = '';
    }
    echo "<input type='button' id='$i' $first  class='$c' style='margin-right:5px;'/>";
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
    i = 0;
    for (; i < 1334; i++) {
        document.getElementById(i).onclick = function () {
            if (NumberColumn == this.className) {
                document.getElementById('resultColumn').innerHTML = 'result column';
                if (numberRow == this.id) {
                    this.style.backgroundColor = "green";
                    alert('تبریک شما برنده شدید')
                    document.getElementById('resultRow').innerHTML = 'resault row';
                    var green = true;
                } else if (numberRow > this.id) {
                    document.getElementById('resultRow').innerHTML = 'right';
                } else if (numberRow < this.id) {
                    document.getElementById('resultRow').innerHTML = 'left';
                }
            } else if (NumberColumn < this.className) {
                document.getElementById('resultColumn').innerHTML = 'top';
            } else if (NumberColumn > this.className) {
                document.getElementById('resultColumn').innerHTML = 'bottom';
            }
            if (!green) {
                this.style.backgroundColor = 'blue';
            }
            counts++;
            document.getElementById('counts').innerHTML = counts;
        }
    }
</script>