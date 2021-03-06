@extends('layouts.app')

@section('content')
    <p style="margin-bottom: 0px; margin-top: 0px">{{ \Illuminate\Support\Facades\Auth::user()->user_name }}</p>
    <p style="margin-bottom: 0px; margin-top: 0px">{{ \Illuminate\Support\Facades\Auth::user()->user_email }}</p>
    <p>Bodovi: {{ $score }}</p>
    <table id="examcheck">
        @foreach($questions as $quesKey => $question)
            <tr>
                <td>
                    <p>{{ $quesKey+1 }}. {{ $question['question'] }}</p>
                    @if($question['type'] == 3)
                        @if($questionScores[$quesKey] == 1)
                            <p class="correct-ans">{{ $anses[$quesKey][0] }}</p>
                        @else
                            <p class="incorrect-ans">{{ $anses[$quesKey][0] }}</p>
                        @endif
                        @continue
                    @endif
                    @foreach($question['ans'] as $ansKey => $ans)
                        @if(empty($anses[$quesKey]))
                            <p class="incorrect-ans">Niste unjeli odgovor!</p>
                            @break
                        @elseif(in_array($ansKey, $question['correct']) && in_array($ansKey, $anses[$quesKey]))
                            <p class="correct-ans">{{ $ans }}
                        @elseif(in_array($ansKey, $question['correct']) && !in_array($ansKey, $anses[$quesKey]))
                            <p class="incorrect-ans">{{ $ans }}
                        @elseif(in_array($ansKey, $anses[$quesKey]) && !in_array($ansKey, $question['correct']))
                            <p class="incorrect-ans">{{ $ans }}
                        @else
                            <p class="neutral-ans">{{ $ans }}
                        @endif
                            </p>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
@endsection