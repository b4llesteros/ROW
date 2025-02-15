@extends('front.layout.master')   

    @section('content')
                        
        <div class="mobile-one-column">
            <div class="slider">
                <img src="{{Storage::url('slider4.png')}}" alt="">
            </div>
            <div class="slider-button">
                <button>Let's Go</button>
            </div>
            <div class="slider-text">
                <h3>Learn English Without Limits</h3>
            </div>                 
        </div>     
        <div class="mobile-one-column">
            <div class="column">
                <div class="featured-title">
                    <h1>Official English Levels</h1>
                </div>
            </div>    
        </div> 
        <div class="mobile-one-column">
            <div class="column featured-column">
                <div class="featured-description">
                    <h5>Level A1 corresponds to basic users of the language, i.e. those able to communciate in everyday situations with commonly-used expressions.</h5>
                </div>
                <div class="featured-element">
                    <div class="featured-image">
                        <img src="{{Storage::url('A1.png')}}" alt="">
                    </div>
                    <div class="featured-title">
                        <h3>Beginner</h3>
                    </div>
                </div>
            </div>
            <div class="column featured-column">            
                <div class="featured-element">                
                    <div class="featured-image">
                        <img src="{{Storage::url('A2.png')}}" alt="">
                    </div>
                    <div class="featured-title">
                        <h3>Elementary</h3>
                    </div>       
                </div>
                <div class="featured-description">
                    <h5>Level A2 corresponds to basic users of the language, i.e. those able to communciate in everyday situations.</h5>
                </div>
            </div>
        </div>    
        <div class="mobile-one-column">
            <div class="column featured-column">
                <div class="featured-description">
                    <h5>Level B1 corresponds to independent users of the language, i.e. those who have the necessary fluency to communicate without effort with native speakers</h5>
                </div>
                <div class="featured-element">                
                    <div class="featured-image">
                        <img src="{{Storage::url('B1.png')}}" alt="">
                    </div> 
                    <div class="featured-title">
                        <h3>Lower Intermediate</h3>
                    </div>               
                </div>                    
            </div>

            <div class="column featured-column">                   
                <div class="featured-element">                
                    <div class="featured-image">
                        <img src="{{Storage::url('B2.png')}}" alt="">
                    </div> 
                    <div class="featured-title">
                        <h3>Intermediate</h3>
                    </div>               
                </div>
                <div class="featured-description">
                    <h5>Level B2 corresponds to independent users of the language, i.e. those who have the necessary fluency to communicate without effort with native speakers</h5>
                </div>
            </div>
        </div>
        <div class="mobile-one-column">
            <div class="column featured-column">
                <div class="featured-description">
                    <h5>Level C1 corresponds to proficient users of the language, i.e. those able to perform complex tasks related to work and study.</h5>
                </div>
                <div class="featured-element">                
                    <div class="featured-image">
                        <img src="{{Storage::url('C1.png')}}" alt="">
                    </div>
                    <div class="featured-title">
                        <h3>Upper intermediate</h3>
                    </div>                
                </div>                   
            </div>
            <div class="column featured-column">
                <div class="featured-element">                
                    <div class="featured-image">
                        <img src="{{Storage::url('C2.png')}}" alt="">
                    </div>
                    <div class="featured-title">
                        <h3>Advanced</h3>
                    </div>               
                </div>
                <div class="featured-description">
                    <h5>Level C2 corresponds to proficient users of the language, i.e. those able to perform complex tasks related to work and study</h5>
                </div>
            </div>
        </div>           
        
    @endsection

