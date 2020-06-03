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
        DB::table('items')->insert([
            'id'=> '1',
            'body' => 'Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview',
            'bold' =>true,
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '2',
            'body' => 'Overview:',
            'link'=> '',
            'bold' =>true,
            'type_id' =>2
        ]);
        DB::table('items')->insert([
            'id'=> '3',
            'body' => 'The purpose of the dental school interview
             History and rationale of the CDA interview
             Types of Questions
             The Seven Competencies
             Structure of the CDA interview',
            'link'=> '',
            'type_id' =>2
        ]);
        DB::table('items')->insert([
            'id'=> '4',
            'body' => 'How to prepare for your CDA Interview',
            'link'=> 'http://cdainterview.com/how-to-prepare-for-cda-interview.html',
            'type_id' =>2
        ]);
        DB::table('items')->insert([
            'id'=> '5',
            'body' => 'Sample CDA interview questions',
            'link'=> 'http://cdainterview.com/sample-cda-interview-questions.html',
            'type_id' =>2
        ]);
        DB::table('items')->insert([
            'id'=> '6',
            'body' => 'BeMo CDA-structured interview prep program',
            'link'=> 'http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html',
            'type_id' =>2
        ]);
        DB::table('items')->insert([
            'id'=> '7',
            'body' => 'Contact us',
            'link'=> 'http://cdainterview.com/contact-us.php',
            'type_id' =>2
        ]);
        DB::table('items')->insert([
            'id'=> '8',
            'body' => 'What is the purpose of the dental school interview?',
            'bold' =>true,
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '9',
            'body' => 'Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate.',
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '10',
            'body' => 'Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are "conscientious" and "open to new experiences" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.',
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '11',
            'body' => 'Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association\'s structured interview or CDA structured interviews.',
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '12',
            'body' => 'History, rationale, and the structure of the CDA interview',
            'bold' =>true,
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '13',
            'body' => 'Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association\'s earlier decision to commission a "new structured interview based on state-of-the-art contemporary interview techniques" (i.e. CDA structured interview)',
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '14',
            'body' => 'What were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, "a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students\' performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions." Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance.',
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '15',
            'body' => 'The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.',
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '16',
            'body' => 'Types of Questions',
            'bold' =>true,
            'type_id' =>1
        ]);
        DB::table('items')->insert([
            'id'=> '17',
            'body' => 'The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,

"You are babysitting your sister’s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?"

Conversely, PBDI type questions, ask the candidates "about past behaviour with the assumption that past behaviour is the best predictor of future behaviour." An example of a PBDI type questions is:


Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?

Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies.',
            'type_id' =>1
        ]);


    }
}
