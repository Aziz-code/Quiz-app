<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Quiz Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!--container-->
    <section class="container">

        <!--questionBox-->
        <div class="questionBox" id="app">

            <!-- transition -->
            <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">

                <!--qusetionContainer-->
                <div class="questionContainer" v-if="questionIndex<quiz.questions.length" v-bind:key="questionIndex">

                    <header>
                        <h1 class="title is-6">Online Quiz</h1>
                        <!--progress-->
                        <div class="progressContainer">
                            <progress class="progress is-info is-small" :value="(questionIndex/quiz.questions.length)*100" max="100">{{(questionIndex/quiz.questions.length)*100}}%</progress>
                            <p>{{(questionIndex/quiz.questions.length)*100}}% complete</p>
                        </div>
                        <!--/progress-->
                    </header>

                    <!-- questionTitle -->
                    <h2 class="titleContainer title">{{ quiz.questions[questionIndex].text }}</h2>

                    <!-- quizOptions -->
                    <div class="optionContainer">
                        <div class="option" v-for="(response, index) in quiz.questions[questionIndex].responses" @click="selectOption(index)" :class="{ 'is-selected': userResponses[questionIndex] == index}" :key="index">
                            {{ index | charIndex }}. {{ response.text }}
                        </div>
                    </div>

                    <!--quizFooter: navigation and progress-->
                    <footer class="questionFooter">

                        <!--pagination-->
                        <nav class="pagination" role="navigation" aria-label="pagination">

                            <!-- back button -->
                            <a class="button" v-on:click="prev();" :disabled="questionIndex < 1">
                                Back
                            </a>

                            <!-- next button -->
                            <a class="button" :class="(userResponses[questionIndex]==null)?'':'is-active'" v-on:click="next();" :disabled="questionIndex>=quiz.questions.length">
                                {{ (userResponses[questionIndex]==null)?'Skip':'Next' }}
                            </a>

                        </nav>
                        <!--/pagination-->

                    </footer>
                    <!--/quizFooter-->

                </div>
                <!--/questionContainer-->

                <!--quizCompletedResult-->
                <div v-if="questionIndex >= quiz.questions.length" v-bind:key="questionIndex" class="quizCompleted has-text-centered">

                    <!-- quizCompletedIcon: Achievement Icon -->
                    <span class="icon">
                        <i class="fa" :class="score()>3?'fa-check-circle-o is-active':'fa-times-circle'"></i>
                    </span>

                    <!--resultTitleBlock-->
				<h2 class="title">
					You did {{ (score()>7?'an amazing':(score()<4?'a poor':'a good')) }} job!
				</h2>
                    </h2>
                    <p class="subtitle">
                        Total score: {{ score() }} / {{ quiz.questions.length }}
                    </p>
                    <br>
                    <a class="button" @click="restart()">restart <i class="fa fa-refresh"></i></a>
                    <!--/resultTitleBlock-->

                </div>
                <!--/quizCompetedResult-->

            </transition>

        </div>
        <!--/questionBox-->

    </section>
    <!--/container-->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
    <!--<script  src="./script.js"></script>-->
    
        
       <?php
        $con = mysqli_connect('localhost', 'root', '');
        
        mysqli_select_db($con, 'sqldb');
        
        $s = "SELECT Question_no, Question, option1, option2, option3, option4, correct_option1, correct_option2, correct_option3, correct_option4 FROM Subject1";
        
         $result = mysqli_query($con, $s);
    
        $count = 0;
        $arr = array();
        for($o = 0; $o < 10; $o++){
        f: $y = rand(1, 30);
        $len = count($arr);
        if($count == 0){
            $count = $count + 1;
            //goto d;    
            $arr[$len] = $y;
        }
        for($x = 0; $x < $len; $x++){
        if($arr[$x] == $y){
            goto f;
            //goto b;
        }
        }
         $arr[$len] = $y;
        }
        $n1 = $arr[0]-1;
        $n2 = $arr[1]-1;
        $n3 = $arr[2]-1;
        $n4 = $arr[3]-1;
        $n5 = $arr[4]-1;
        $n6 = $arr[5]-1;
        $n7 = $arr[6]-1;
        $n8 = $arr[7]-1;
        $n9 = $arr[8]-1;
        $n10 = $arr[9]-1;

    
    
    
    
        if($result->num_rows > 0) { 
                    
            $i = 0;
            while($row = $result->fetch_assoc()) {
                    $q_no[$i] = $row["Question_no"];
                    $q[$i] = $row["Question"];
                    $o1[$i] = $row["option1"];
                    $o2[$i] = $row["option2"];
                    $o3[$i] = $row["option3"];
                    $o4[$i] = $row["option4"];
                    $correct_o1[$i] = $row["correct_option1"]; 
                    $correct_o2[$i] = $row["correct_option2"]; 
                    $correct_o3[$i] = $row["correct_option3"]; 
                    $correct_o4[$i] = $row["correct_option4"];   
                $i = $i + 1;
            }
        }
    
        $q_no_Q1 = $q_no[$n1];
        $q_no_Q2 = $q_no[$n2];
        $q_no_Q3 = $q_no[$n3];
        $q_no_Q4 = $q_no[$n4];
        $q_no_Q5 = $q_no[$n5];
        $q_no_Q6 = $q_no[$n6];
        $q_no_Q7 = $q_no[$n7];
        $q_no_Q8 = $q_no[$n8];
        $q_no_Q9 = $q_no[$n9];
        $q_no_Q10 = $q_no[$n10];
    
        $q_Q1 = $q[$n1];
        $q_Q2 = $q[$n2];
        $q_Q3 = $q[$n3];
        $q_Q4 = $q[$n4];
        $q_Q5 = $q[$n5];
        $q_Q6 = $q[$n6];
        $q_Q7 = $q[$n7];
        $q_Q8 = $q[$n8];
        $q_Q9 = $q[$n9];
        $q_Q10 = $q[$n10];

        $o1_Q1 = $o1[$n1];
        $o1_Q2 = $o1[$n2];
        $o1_Q3 = $o1[$n3];
        $o1_Q4 = $o1[$n4];
        $o1_Q5 = $o1[$n5];
        $o1_Q6 = $o1[$n6];
        $o1_Q7 = $o1[$n7];
        $o1_Q8 = $o1[$n8];
        $o1_Q9 = $o1[$n9];
        $o1_Q10 = $o1[$n10];

        $o2_Q1 = $o2[$n1];
        $o2_Q2 = $o2[$n2];
        $o2_Q3 = $o2[$n3];
        $o2_Q4 = $o2[$n4];
        $o2_Q5 = $o2[$n5];
        $o2_Q6 = $o2[$n6];
        $o2_Q7 = $o2[$n7];
        $o2_Q8 = $o2[$n8];
        $o2_Q9 = $o2[$n9];
        $o2_Q10 = $o2[$n10];

        $o3_Q1 = $o3[$n1];
        $o3_Q2 = $o3[$n2];
        $o3_Q3 = $o3[$n3];
        $o3_Q4 = $o3[$n4];
        $o3_Q5 = $o3[$n5];
        $o3_Q6 = $o3[$n6];
        $o3_Q7 = $o3[$n7];
        $o3_Q8 = $o3[$n8];
        $o3_Q9 = $o3[$n9];
        $o3_Q10 = $o3[$n10];

        $o4_Q1 = $o4[$n1];
        $o4_Q2 = $o4[$n2];
        $o4_Q3 = $o4[$n3];
        $o4_Q4 = $o4[$n4];
        $o4_Q5 = $o4[$n5];
        $o4_Q6 = $o4[$n6];
        $o4_Q7 = $o4[$n7];
        $o4_Q8 = $o4[$n8];
        $o4_Q9 = $o4[$n9];
        $o4_Q10 = $o4[$n10];

        $correct_o1_Q1 = $correct_o1[$n1];
        $correct_o1_Q2 = $correct_o1[$n2];
        $correct_o1_Q3 = $correct_o1[$n3];
        $correct_o1_Q4 = $correct_o1[$n4];
        $correct_o1_Q5 = $correct_o1[$n5];
        $correct_o1_Q6 = $correct_o1[$n6];
        $correct_o1_Q7 = $correct_o1[$n7];
        $correct_o1_Q8 = $correct_o1[$n8];
        $correct_o1_Q9 = $correct_o1[$n9];
        $correct_o1_Q10 = $correct_o1[$n10];

        $correct_o2_Q1 = $correct_o2[$n1];
        $correct_o2_Q2 = $correct_o2[$n2];
        $correct_o2_Q3 = $correct_o2[$n3];
        $correct_o2_Q4 = $correct_o2[$n4];
        $correct_o2_Q5 = $correct_o2[$n5];
        $correct_o2_Q6 = $correct_o2[$n6];
        $correct_o2_Q7 = $correct_o2[$n7];
        $correct_o2_Q8 = $correct_o2[$n8];
        $correct_o2_Q9 = $correct_o2[$n9];
        $correct_o2_Q10 = $correct_o2[$n10];

        $correct_o3_Q1 = $correct_o3[$n1];
        $correct_o3_Q2 = $correct_o3[$n2];
        $correct_o3_Q3 = $correct_o3[$n3];
        $correct_o3_Q4 = $correct_o3[$n4];
        $correct_o3_Q5 = $correct_o3[$n5];
        $correct_o3_Q6 = $correct_o3[$n6];
        $correct_o3_Q7 = $correct_o3[$n7];
        $correct_o3_Q8 = $correct_o3[$n8];
        $correct_o3_Q9 = $correct_o3[$n9];
        $correct_o3_Q10 = $correct_o3[$n10];

        $correct_o4_Q1 = $correct_o4[$n1];
        $correct_o4_Q2 = $correct_o4[$n2];
        $correct_o4_Q3 = $correct_o4[$n3];
        $correct_o4_Q4 = $correct_o4[$n4];
        $correct_o4_Q5 = $correct_o4[$n5];
        $correct_o4_Q6 = $correct_o4[$n6];
        $correct_o4_Q7 = $correct_o4[$n7];
        $correct_o4_Q8 = $correct_o4[$n8];
        $correct_o4_Q9 = $correct_o4[$n9];
        $correct_o4_Q10 = $correct_o4[$n10];
    ?>
    <script>
        var q_no_Q1= '<?php echo $q_no_Q1?>';
        var q_no_Q2= '<?php echo $q_no_Q2?>';
        var q_no_Q3= '<?php echo $q_no_Q3?>';
        var q_no_Q4= '<?php echo $q_no_Q4?>';
        var q_no_Q5= '<?php echo $q_no_Q5?>';
        var q_no_Q6= '<?php echo $q_no_Q6?>';
        var q_no_Q7= '<?php echo $q_no_Q7?>';
        var q_no_Q8= '<?php echo $q_no_Q8?>';
        var q_no_Q9= '<?php echo $q_no_Q9?>';
        var q_no_Q10= '<?php echo $q_no_Q10?>';
        
        var q_Q1= '<?php echo $q_Q1?>';
        var q_Q2= '<?php echo $q_Q2?>';
        var q_Q3= '<?php echo $q_Q3?>';
        var q_Q4= '<?php echo $q_Q4?>';
        var q_Q5= '<?php echo $q_Q5?>';
        var q_Q6= '<?php echo $q_Q6?>';
        var q_Q7= '<?php echo $q_Q7?>';
        var q_Q8= '<?php echo $q_Q8?>';
        var q_Q9= '<?php echo $q_Q9?>';
        var q_Q10= '<?php echo $q_Q10?>';
        
        var o1_Q1= '<?php echo $o1_Q1?>';
        var o1_Q2= '<?php echo $o1_Q2?>';
        var o1_Q3= '<?php echo $o1_Q3?>';
        var o1_Q4= '<?php echo $o1_Q4?>';
        var o1_Q5= '<?php echo $o1_Q5?>';
        var o1_Q6= '<?php echo $o1_Q6?>';
        var o1_Q7= '<?php echo $o1_Q7?>';
        var o1_Q8= '<?php echo $o1_Q8?>';
        var o1_Q9= '<?php echo $o1_Q9?>';
        var o1_Q10= '<?php echo $o1_Q10?>';
        
        var o2_Q1= '<?php echo $o2_Q1?>';
        var o2_Q2= '<?php echo $o2_Q2?>';
        var o2_Q3= '<?php echo $o2_Q3?>';
        var o2_Q4= '<?php echo $o2_Q4?>';
        var o2_Q5= '<?php echo $o2_Q5?>';
        var o2_Q6= '<?php echo $o2_Q6?>';
        var o2_Q7= '<?php echo $o2_Q7?>';
        var o2_Q8= '<?php echo $o2_Q8?>';
        var o2_Q9= '<?php echo $o2_Q9?>';
        var o2_Q10= '<?php echo $o2_Q10?>';

        var o3_Q1= '<?php echo $o3_Q1?>';
        var o3_Q2= '<?php echo $o3_Q2?>';
        var o3_Q3= '<?php echo $o3_Q3?>';
        var o3_Q4= '<?php echo $o3_Q4?>';
        var o3_Q5= '<?php echo $o3_Q5?>';
        var o3_Q6= '<?php echo $o3_Q6?>';
        var o3_Q7= '<?php echo $o3_Q7?>';
        var o3_Q8= '<?php echo $o3_Q8?>';
        var o3_Q9= '<?php echo $o3_Q9?>';
        var o3_Q10= '<?php echo $o3_Q10?>';
        
        var o4_Q1= '<?php echo $o4_Q1?>';
        var o4_Q2= '<?php echo $o4_Q2?>';
        var o4_Q3= '<?php echo $o4_Q3?>';
        var o4_Q4= '<?php echo $o4_Q4?>';
        var o4_Q5= '<?php echo $o4_Q5?>';
        var o4_Q6= '<?php echo $o4_Q6?>';
        var o4_Q7= '<?php echo $o4_Q7?>';
        var o4_Q8= '<?php echo $o4_Q8?>';
        var o4_Q9= '<?php echo $o4_Q9?>';
        var o4_Q10= '<?php echo $o4_Q10?>';
        
        var correct_o1_Q1= '<?php echo $correct_o1_Q1?>';
        var correct_o1_Q2= '<?php echo $correct_o1_Q2?>';
        var correct_o1_Q3= '<?php echo $correct_o1_Q3?>';
        var correct_o1_Q4= '<?php echo $correct_o1_Q4?>';
        var correct_o1_Q5= '<?php echo $correct_o1_Q5?>';
        var correct_o1_Q6= '<?php echo $correct_o1_Q6?>';
        var correct_o1_Q7= '<?php echo $correct_o1_Q7?>';
        var correct_o1_Q8= '<?php echo $correct_o1_Q8?>';
        var correct_o1_Q9= '<?php echo $correct_o1_Q9?>';
        var correct_o1_Q10= '<?php echo $correct_o1_Q10?>';
        
        var correct_o2_Q1= '<?php echo $correct_o2_Q1?>';
        var correct_o2_Q2= '<?php echo $correct_o2_Q2?>';
        var correct_o2_Q3= '<?php echo $correct_o2_Q3?>';
        var correct_o2_Q4= '<?php echo $correct_o2_Q4?>';
        var correct_o2_Q5= '<?php echo $correct_o2_Q5?>';
        var correct_o2_Q6= '<?php echo $correct_o2_Q6?>';
        var correct_o2_Q7= '<?php echo $correct_o2_Q7?>';
        var correct_o2_Q8= '<?php echo $correct_o2_Q8?>';
        var correct_o2_Q9= '<?php echo $correct_o2_Q9?>';
        var correct_o2_Q10= '<?php echo $correct_o2_Q10?>';
        
        var correct_o3_Q1= '<?php echo $correct_o3_Q1?>';
        var correct_o3_Q2= '<?php echo $correct_o3_Q2?>';
        var correct_o3_Q3= '<?php echo $correct_o3_Q3?>';
        var correct_o3_Q4= '<?php echo $correct_o3_Q4?>';
        var correct_o3_Q5= '<?php echo $correct_o3_Q5?>';
        var correct_o3_Q6= '<?php echo $correct_o3_Q6?>';
        var correct_o3_Q7= '<?php echo $correct_o3_Q7?>';
        var correct_o3_Q8= '<?php echo $correct_o3_Q8?>';
        var correct_o3_Q9= '<?php echo $correct_o3_Q9?>';
        var correct_o3_Q10= '<?php echo $correct_o3_Q10?>';
        
        var correct_o4_Q1= '<?php echo $correct_o4_Q1?>';
        var correct_o4_Q2= '<?php echo $correct_o4_Q2?>';
        var correct_o4_Q3= '<?php echo $correct_o4_Q3?>';
        var correct_o4_Q4= '<?php echo $correct_o4_Q4?>';
        var correct_o4_Q5= '<?php echo $correct_o4_Q5?>';
        var correct_o4_Q6= '<?php echo $correct_o4_Q6?>';
        var correct_o4_Q7= '<?php echo $correct_o4_Q7?>';
        var correct_o4_Q8= '<?php echo $correct_o4_Q8?>';
        var correct_o4_Q9= '<?php echo $correct_o4_Q9?>';
        var correct_o4_Q10= '<?php echo $correct_o4_Q10?>'; 
        
        var cor_o1_Q1;
        var cor_o1_Q2;
        var cor_o1_Q3;
        var cor_o1_Q4;
        var cor_o1_Q5;
        var cor_o1_Q6;
        var cor_o1_Q7;
        var cor_o1_Q8;
        var cor_o1_Q9;
        var cor_o1_Q10;
        
        var cor_o2_Q1;
        var cor_o2_Q2;
        var cor_o2_Q3;
        var cor_o2_Q4;
        var cor_o2_Q5;
        var cor_o2_Q6;
        var cor_o2_Q7;
        var cor_o2_Q8;
        var cor_o2_Q9;
        var cor_o2_Q10;
        
        var cor_o3_Q1;
        var cor_o3_Q2;
        var cor_o3_Q3;
        var cor_o3_Q4;
        var cor_o3_Q5;
        var cor_o3_Q6;
        var cor_o3_Q7;
        var cor_o3_Q8;
        var cor_o3_Q9;
        var cor_o3_Q10;
        
        var cor_o4_Q1;
        var cor_o4_Q2;
        var cor_o4_Q3;
        var cor_o4_Q4;
        var cor_o4_Q5;
        var cor_o4_Q6;
        var cor_o4_Q7;
        var cor_o4_Q8;
        var cor_o4_Q9;
        var cor_o4_Q10;
        
        if(correct_o1_Q1 == "1"){
            cor_o1_Q1 = "true";
        }
		if(correct_o1_Q2 == "1"){
            cor_o1_Q2 = "true";
        }
		if(correct_o1_Q3 == "1"){
            cor_o1_Q3 = "true";
        }
		if(correct_o1_Q4 == "1"){
            cor_o1_Q4 = "true";
        }
		if(correct_o1_Q5 == "1"){
            cor_o1_Q5 = "true";
        }
		if(correct_o1_Q6 == "1"){
            cor_o1_Q6 = "true";
        }
		if(correct_o1_Q7 == "1"){
            cor_o1_Q7 = "true";
        }
		if(correct_o1_Q8 == "1"){
            cor_o1_Q8 = "true";
        }
		if(correct_o1_Q9 == "1"){
            cor_o1_Q9 = "true";
        }
		if(correct_o1_Q10 == "1"){
            cor_o1_Q10 = "true";
        }
        
        if(correct_o2_Q1 == "1"){
            cor_o2_Q1 = "true";
        }
		if(correct_o2_Q2 == "1"){
            cor_o2_Q2 = "true";
        }
		if(correct_o2_Q3 == "1"){
            cor_o2_Q3 = "true";
        }
		if(correct_o2_Q4 == "1"){
            cor_o2_Q4 = "true";
        }
		if(correct_o2_Q5 == "1"){
            cor_o2_Q5 = "true";
        }
		if(correct_o2_Q6 == "1"){
            cor_o2_Q6 = "true";
        }
		if(correct_o2_Q7 == "1"){
            cor_o2_Q7 = "true";
        }
		if(correct_o2_Q8 == "1"){
            cor_o2_Q8 = "true";
        }
		if(correct_o2_Q9 == "1"){
            cor_o2_Q9 = "true";
        }
		if(correct_o2_Q10 == "1"){
            cor_o2_Q10 = "true";
        }
        
        if(correct_o3_Q1 == "1"){
            cor_o3_Q1 = "true";
        }
		if(correct_o3_Q2 == "1"){
            cor_o3_Q2 = "true";
        }
		if(correct_o3_Q3 == "1"){
            cor_o3_Q3 = "true";
        }
		if(correct_o3_Q4 == "1"){
            cor_o3_Q4 = "true";
        }
		if(correct_o3_Q5 == "1"){
            cor_o3_Q5 = "true";
        }
		if(correct_o3_Q6 == "1"){
            cor_o3_Q6 = "true";
        }
		if(correct_o3_Q7 == "1"){
            cor_o3_Q7 = "true";
        }
		if(correct_o3_Q8 == "1"){
            cor_o3_Q8 = "true";
        }
		if(correct_o3_Q9 == "1"){
            cor_o3_Q9 = "true";
        }
		if(correct_o3_Q10 == "1"){
            cor_o3_Q10 = "true";
        }
        
        if(correct_o4_Q1 == "1"){
            cor_o4_Q1 = "true";
        }
		if(correct_o4_Q2 == "1"){
            cor_o4_Q2 = "true";
        }
		if(correct_o4_Q3 == "1"){
            cor_o4_Q3 = "true";
        }
		if(correct_o4_Q4 == "1"){
            cor_o4_Q4 = "true";
        }
		if(correct_o4_Q5 == "1"){
            cor_o4_Q5 = "true";
        }
		if(correct_o4_Q6 == "1"){
            cor_o4_Q6 = "true";
        }
		if(correct_o4_Q7 == "1"){
            cor_o4_Q7 = "true";
        }
		if(correct_o4_Q8 == "1"){
            cor_o4_Q8 = "true";
        }
		if(correct_o4_Q9 == "1"){
            cor_o4_Q9 = "true";
        }
		if(correct_o4_Q10 == "1"){
            cor_o4_Q10 = "true";
        }
        
        var quiz = {
                user: "Dave",
                questions: [{
                        text: q_Q1,
                        responses: [{
                                text: o1_Q1,
                                correct: cor_o1_Q1,
                            },
                            {
                                text: o2_Q1,
                                correct: cor_o2_Q1,
                            },
                            {
                                text: o3_Q1,
                                correct: cor_o3_Q1,
                            },
                            {
                                text: o4_Q1,
                                correct: cor_o4_Q1,
                            }
                        ]
                    },


                    {
                        text: q_Q2,
                        responses: [{
                                text: o1_Q2,
                                correct: cor_o1_Q2,
                            },
                            {
                                text: o2_Q2,
                                correct: cor_o2_Q2,
                            },
                            {
                                text: o3_Q2,
                                correct: cor_o3_Q2,
                            },
                            {
                                text: o4_Q2,
                                correct: cor_o4_Q2,
                            }
                        ]
                    },


                    {
                        text: q_Q3,
                        responses: [{
                                text: o1_Q3,
                                correct: cor_o1_Q3,
                            },
                            {
                                text: o2_Q3,
                                correct: cor_o2_Q3,
                            },
                            {
                                text: o3_Q3,
                                correct: cor_o3_Q3,
                            },
                            {
                                text: o4_Q3,
                                correct: cor_o4_Q3,
                            }
                        ]
                    },


                    {
                        text: q_Q4,
                        responses: [{
                                text: o1_Q4,
                                correct: cor_o1_Q4,
                            },
                            {
                                text: o2_Q4,
                                correct: cor_o2_Q4,
                            },
                            {
                                text: o3_Q4,
                                correct: cor_o3_Q4,
                            },

                            {
                                text: o4_Q4,
                                correct: cor_o4_Q4,
                            }
                        ]
                    },


                    {
                        text: q_Q5,
                        responses: [{
                                text: o1_Q5,
                                correct: cor_o1_Q5,
                            },
                            {
                                text: o2_Q5,
                                correct: cor_o2_Q5,
                            },

                            {
                                text: o3_Q5,
                                correct: cor_o3_Q5,
                            },
                            {
                                text: o4_Q5,
                                correct: cor_o4_Q5,
                            }
                        ]
                    },


                    {
                        text: q_Q6,
                        responses: [{
                                text: o1_Q6,
                                correct: cor_o1_Q6,
                            },
                            {
                                text: o2_Q6,
                                correct: cor_o2_Q6,
                            },
                            {
                                text: o3_Q6,
                                correct: cor_o3_Q6,
                            },
                            {
                                text: o4_Q6,
                                correct: cor_o4_Q6,
                            }
                        ]
                    },


                    {
                        text: q_Q7,
                        responses: [{
                                text: o1_Q7,
                                correct: cor_o1_Q7,
                            },
                            {
                                text: o2_Q7,
                                correct: cor_o2_Q7,
                            },
                            {
                                text: o3_Q7,
                                correct: cor_o3_Q7,
                            },

                            {
                                text: o4_Q7,
                                correct: cor_o4_Q7,
                            }
                        ]
                    },


                    {
                        text: q_Q8,
                        responses: [{
                                text: o1_Q8,
                                correct: cor_o1_Q8,
                            },
                            {
                                text: o2_Q8,
                                correct: cor_o2_Q8,
                            },
                            {
                                text: o3_Q8,
                                correct: cor_o3_Q8,
                            },
                            {
                                text: o4_Q8,
                                correct: cor_o4_Q8,
                            }
                        ]
                    },


                    {
                        text: q_Q9,
                        responses: [{
                                text: o1_Q9,
                                correct: cor_o1_Q9,
                            },

                            {
                                text: o2_Q9,
                                correct: cor_o2_Q9,
                            },
                            {
                                text: o3_Q9,
                                correct: cor_o3_Q9,
                            },
                            {
                                text: o4_Q9,
                                correct: cor_o4_Q9,
                            }
                        ]
                    },


                    {
                        text: q_Q10,
                        responses: [{
                                text: o1_Q10,
                                correct: cor_o1_Q10,
                            },
                            {
                                text: o2_Q10,
                                correct: cor_o2_Q10,
                            },
                            {
                                text: o3_Q10,
                                correct: cor_o3_Q10,
                            },
                            {
                                text: o4_Q10,
                                correct: cor_o4_Q10,
                            }
                        ]
                    }
                ]
            },




            userResponseSkelaton = Array(quiz.questions.length).fill(null);

        var app = new Vue({
            el: "#app",
            data: {
                quiz: quiz,
                questionIndex: 0,
                userResponses: userResponseSkelaton,
                isActive: false
            },

            filters: {
                charIndex: function(i) {
                    return String.fromCharCode(97 + i);
                }
            },

            methods: {
                restart: function() {
                    this.questionIndex = 0;
                    this.userResponses = Array(this.quiz.questions.length).fill(null);
                },
                selectOption: function(index) {
                    Vue.set(this.userResponses, this.questionIndex, index);
                    //console.log(this.userResponses);
                },
                next: function() {
                    if (this.questionIndex < this.quiz.questions.length)
                        this.questionIndex++;
                },

                prev: function() {
                    if (this.quiz.questions.length > 0) this.questionIndex--;
                },
                // Return "true" count in userResponses
                score: function() {
                    var score = 0;
                    for (let i = 0; i < this.userResponses.length; i++) {
                        if (
                            typeof this.quiz.questions[i].responses[
                                this.userResponses[i]] !==
                            "undefined" &&
                            this.quiz.questions[i].responses[this.userResponses[i]].correct) {
                            score = score + 1;
                        }
                    }
                    return score;

                    //return this.userResponses.filter(function(val) { return val }).length;
                }
            }
        });

    </script>

</body>

</html>