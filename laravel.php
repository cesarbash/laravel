//create query using ::with multiple with conditions

$questionnaires = Questionnaire::with( [ 'questions.answers' => function( $query ) use ($store,$date) {
          $query->where( 'store_id', $store )->where('numeration_date',$date);
        }])->get();
