<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_pages')->delete();
        DB::table('items')->delete();
        DB::table('items')->insert([
            'id'=> '18',
            'body' => '',
            'link' => 'http://cdainterview.com/resources/cda-interview-guide.jpg',
            'type_id' =>3
        ]);
        DB::table('items')->insert([
            'id'=> '1',
            'body' => 'Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview',
            'bold' =>true,
            'hsize_id' =>3,
            'type_id' =>1
        ]);

        DB::table('items')->insert([
            'id'=> '3',
            'title' => 'Overview:',
            'body' => 'The purpose of the dental school interview<br/>
History and rationale of the CDA interview<br/>
Types of Questions<br/>
The Seven Competencies<br/>
Structure of the CDA interview<br/>
<a href="how-to-prepare-for-cda-interview.html" rel="self" title="How To Prepare">How to prepare for your CDA Interview</a><br/>
<a href="sample-cda-interview-questions.html" rel="self" title="CDA Interview Questions">Sample CDA interview questions</a><br/>
<a href="http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html" rel="external" target="_blank">BeMo CDA-structured interview prep program</a><br/>
<a href="contact-us.php" rel="self" title="Contact Us">Contact us</a>',
            'link'=> '',
            'type_id' =>1
        ]);





        DB::table('items')->insert([
            'id'=> '9',
            'title'=> 'What is the purpose of the dental school interview?',
            'body' => 'Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate.<br/>
Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are "conscientious" and "open to new experiences" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.<br/>
Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association\'s structured interview or CDA structured interviews.',
            'type_id' =>1
        ]);



        DB::table('items')->insert([
            'id'=> '13',
            'title'=> 'History, rationale, and the structure of the CDA interview',
            'body' => 'Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association\'s earlier decision to commission a "new structured interview based on state-of-the-art contemporary interview techniques" (i.e. CDA structured interview)<br/>
What were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, "a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students\' performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions." Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance.<br/>
The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.',

            'type_id' =>1
        ]);


        DB::table('items')->insert([
            'id'=> '17',
            'title' => 'Types of Questions',
            'body' => 'The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,

"You are babysitting your sister’s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?"

Conversely, PBDI type questions, ask the candidates "about past behaviour with the assumption that past behaviour is the best predictor of future behaviour." An example of a PBDI type questions is:


Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?

Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies.',
            'type_id' =>1
        ]);

        DB::table('items')->insert([
            'id'=> '20',
            'title' => 'The Seven Competencies',
            'body' => '1. Communication: does the applicant have excellent communication skills?<br/>
2. Conscientiousness: is the applicant thorough, careful to do tasks well?<br/>
3. Integrity : is the applicant honest with themselves and others?<br/>
4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?<br/>
5. self-control : Does the applicant remain calm and in control in difficult situations?<br/>
6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?<br/>
7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?<br/>

Notice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers.',
            'type_id' =>1
        ]);

        DB::table('items')->insert([
            'id'=> '21',
            'body' => '',
            'bold' =>true,
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '22',
            'title'=>'Structure of the CDA interview',
            'body' => 'The CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed.<br/>

Click <a href="how-to-prepare-for-cda-interview.html" rel="self" title="How To Prepare">here</a> to learn how to prepare for your CDA interview<br/>

Click <a href="sample-cda-interview-questions.html" rel="self" title="CDA Interview Questions">here</a> to practice with our sample CDA interview questions<br/>

Click <a href="http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html" rel="external" target="_blank">here</a> to learn more about our money-back guarantee CDA interview preparation programs.
',
            'type_id' =>1
        ]);

        DB::table('items')->insert([
            'id'=> '24',
            'title'=>'Reference',
            'body' => 'Poole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.',
            'type_id' =>1
        ]);

        DB::table('items')->insert([
            'id'=> '29',
            'body' => '',
            'link' => 'http://cdainterview.com/resources/contact-us.png',
            'type_id' =>3
        ]);


        DB::table('items')->insert([
            'id'=> '33',
            'body' => '<form action="./contact-us_files/mailer.php" method="post" enctype="multipart/form-data">
	 <div><div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span style="font-size:13px; "><br></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">info@bemoacademicconsulting.com</span></span></div>
		<center><label>Name:</label> *</center><br>
		<input class="form-input-field" type="text" value="" name="form[element0]" size="40"><br><br>

		<center><label>Email Address:</label> *</center><br>
		<input class="form-input-field" type="text" value="" name="form[element1]" size="40"><br><br>

		<center><label>How can we help you?</label> *</center><br>
		<textarea class="form-input-field" name="form[element2]" rows="8" cols="38"></textarea><br><br>

		<div style="display: none;"><div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span style="font-size:13px; "><br></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">info@bemoacademicconsulting.com</span></span></div>
			<label>Spam Protection: Please don\'t fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="799677525ed7ecdc0ec47">
		<input class="form-input-button" type="reset" name="resetButton" value="Reset">
		<input class="form-input-button" type="submit" name="submitButton" value="Submit">
	</div>
</form>',
            'link' => '',
            'type_id' =>4
        ]);


    }
}
