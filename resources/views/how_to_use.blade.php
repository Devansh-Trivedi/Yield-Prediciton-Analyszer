@extends('layouts.master')

@section('content')
<div class="container">
        <h1 id="heading" style="font-size:2em;">How To Use</h1>


    {{--step2--}}
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <h2 id="heading" style="font-size: 1.3em;">#1 Navigate to Predict Page</h2>

            <blockquote>
                  Now, We need to navigate to predict page for prediction form.
                <div align="center" >
                    <a href="/predict" class="label label-primary" title="go to predict page">Navigate Now</a>
                </div>
            </blockquote>
            <br>
        </div>

        {{--step3--}}
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <h2 id="heading" style="font-size: 1.3em;">#2 Predicting Yield</h2>

                <blockquote>
                    We have to fill Prediction form  and then Submit for getting Predictions.
                    <div align="center" >
                        <a href="/predict" class="label label-primary" title="go to predict page">Navigate Now</a>
                    </div>
                </blockquote>
                <br>
            </div>
    </div>


     {{--step 4--}}
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <h2 id="heading" style="font-size: 1.3em;">#3 That's All</h2>

                <blockquote>
                    Congratulations!, you have done it,
                    thats all you have to do.

                        <a href="/" class="label label-primary" title="go to welcome page">Welcome Page</a>
                </blockquote>
                <br>
            </div>
        </div>
</div>

@endsection
