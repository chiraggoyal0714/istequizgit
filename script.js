update();
function update(){
    $.getJSON('update.php', function (jsonObj) {
            var data = jsonObj;
            var qid = data['q_id'],
                qname = data['qname'],
                q_id = parseInt(qid)+1,
                i_name = 'images/ques/'+qid+'.jpg',
                str = '';
            str += '<div id="mySidenav" class="sidenav">';
            str += '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>' ;
            str += '<a href="page.php">Home</a>';
            str += '<a href="leaderboard.php">Leaderboard</a>' ;
            str += '<a href="story.php">Story Line</a>';
            str += '<a href="rule.php">Rules</a>';
            str += '<a href="logout.php"> Logout </a></div>';
            str += '</div><div style="text-align:center;position: absolute "></div>';
            str += '<h1 style="margin-left: 35%;margin-top: 10%">Level : '+ q_id +'</h1><div class="container"><div class="row"><div class="col-sm-4 col-sm-offset-2">';
            str += '<img src="'+ i_name +'" alt="'+ i_name +'" width="200%" height="50%" style="margin-top: 1%;">';
            str += '</div></div></div><br>';
            str += '</div><div class="container"><div class="row"><div class="col-sm-4 col-sm-offset-2">';
            str += '<form method="POST" action="check.php" text-align="left">';
            str += '<input type="text" name="ans" size="40px" style="margin-top:1px;margin-left: 55%;" autofocus required>';
            str += '<input type="hidden" name="q_id" value="'+ qid +'">';
            str += '<input type="submit" class="abc" value="submit" size="40px" style="margin-top:4px;margin-left: 73%;padding:0 10 10 10px"></form></div></div></div>';
            $('#ques').html(str);
            str1 = '';
            str1 += ''
        } );
};