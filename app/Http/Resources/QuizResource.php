<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'quiz_title' => $this->title,
            'quiz_duration' => $this->duration,
            'question_data' => $this->questionbank_quizzes->map(function ($data) {
                $choices = json_decode($data->questionbank->answers);
                $finalChoice = $choices[0]->options[0];
                $finalChoice = array_map(function ($finalChoice, $index) {
                    return [
                        'id' => $index + 1,
                        'option' => $finalChoice
                    ];
                }, $finalChoice, array_keys($finalChoice));
                return [
                    'id' => $data->questionbank->id,
                    'question' => $data->questionbank->question,
                    'published_at' => $data->questionbank->created_at,
                    'choices' => $finalChoice
                ];
            })->toArray(),
        ];
    }
}

