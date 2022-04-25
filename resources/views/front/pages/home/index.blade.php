@extends('front.layout.master')   

@section('content')
                    
    <div class="desktop-one-column mobile-one-column">
        <div class="slider">
            <img src="{{Storage::url('slider1.png')}}" alt="">
        </div>
        <div class="slider-button">
            <button>Let's Go</button>
            </div>
            <div class="slider-text">
                <h2>Learn English Without Limits</h2>
            </div>                 
    </div> 
    
    <div class="desktop-one-column mobile-one-column">
        <div class="column">
            <div class="featured-title">
                <h1>Official English Levels</h1>
            </div>
        </div>    
    </div>    

    <div class="desktop-two-columns mobile-one-column">

        <div class="column level-column">
            <div class="level-description">
                <h3>Level A1 corresponds to basic users of the language, i.e. those able to communciate in everyday situations with commonly-used expressions and elementary vocabulary.</h3>
            </div>
            <div class="featured-level">
                <div class="featured-level-image">
                    <img src="{{Storage::url('A1.png')}}" alt="">
                </div>
                <div class="featured-level-title">
                    <h2>Beginner</h2>
                </div>
            </div>
        </div>

        <div class="column level-column">
            
            <div class="featured-level">                
                <div class="featured-level-image">
                    <img src="{{Storage::url('A2.png')}}" alt="">
                </div>
                <div class="featured-level-title">
                    <h2>Elementary</h2>
                </div>       
            </div>
            <div class="level-description">
                <h3>Level A2 corresponds to basic users of the language, i.e. those able to communciate in everyday situations with commonly-used expressions and elementary vocabulary.</h3>
            </div>
        </div>

    </div>
    
    <div class="desktop-two-columns mobile-one-column two-columns-levels">

        <div class="column level-column">
            <div class="level-description">
                <h3>Level B1 corresponds to independent users of the language, i.e. those who have the necessary fluency to communicate without effort with native speakers</h3>
            </div>
            <div class="featured-level">                
                <div class="featured-level-image">
                    <img src="{{Storage::url('B1.png')}}" alt="">
                </div> 
                <div class="featured-level-title">
                    <h2>Lower Intermediate</h2>
                </div>               
            </div>                    
        </div>

        <div class="column level-column">                   
            <div class="featured-level">                
                <div class="featured-level-image">
                    <img src="{{Storage::url('B2.png')}}" alt="">
                </div> 
                <div class="featured-level-title">
                    <h2>Intermediate</h2>
                </div>               
            </div>
            <div class="level-description">
                <h3>Level B2 corresponds to independent users of the language, i.e. those who have the necessary fluency to communicate without effort with native speakers</h3>
            </div>
        </div>
    </div>

    <div class="desktop-two-columns mobile-one-column">
        <div class="column level-column">
            <div class="level-description">
                <h3>Level C1 corresponds to proficient users of the language, i.e. those able to perform complex tasks related to work and study.</h3>
            </div>
            <div class="featured-level">                
                <div class="featured-level-image">
                    <img src="{{Storage::url('C1.png')}}" alt="">
                </div>
                <div class="featured-level-title">
                    <h2>Upper intermediate</h2>
                </div>                
            </div>                   
        </div>

        <div class="column level-column">
            <div class="featured-level">                
                <div class="featured-level-image">
                    <img src="{{Storage::url('C2.png')}}" alt="">
                </div>
                <div class="featured-level-title">
                    <h2>Advanced</h2>
                </div>               
            </div>
            <div class="level-description">
                <h3>Level C2 corresponds to proficient users of the language, i.e. those able to perform complex tasks related to work and study</h3>
            </div>
        </div>
    </div>           
    
@endsection

