//create query using ::with multiple with conditions

$questionnaires = Questionnaire::with(['questions' => function($query) use ($questionnaire) {
            $query->where('id',$questionnaire); 
}, 'questions.answers' => function($query) use ($store,$date) {
  $query->where( 'store_id', $store )->where('numeration_date',$date);
}])->get();
