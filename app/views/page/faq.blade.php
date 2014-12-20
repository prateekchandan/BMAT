@extends('template')
@section('body')

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Faqs</h1>
                    <p>Frequently Asked Questions</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="{{URL::Route('home')}}">Home</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->        

    <section id="faqs" class="container">
        <ul class="faq unstyled">
            <li>
                <span class="number">01</span>
                <div>
                    <h4>For how many years do the children practice B-MAT</h4>
                    <p>This depends upon the child's capability. This program can be completed within a year, however generally the children complete the program within 1-3 years.</p>
                </div>
            </li>
            <li>
                <span class="number">02</span>
                <div>
                    <h4>How was B-MAT developed?</h4>
                    <p>B-MAT was devised as program for children to develop the learning sense of children.</p>
                </div>
            </li>
            <li>
                <span class="number">03</span>
                <div>
                    <h4>Who uses B-MAT?</h4>
                    <p>B-MAT is used by over 10+ million users all across the world and is highly popular in countries such as U.S.A , Japan, Taiwan, Singapore, China and India.</p>
                </div>
            </li>
            <li>
                <span class="number">04</span>
                <div>
                    <h4>From what age can children begin B-MAT?</h4>
                    <p>B-MAT can be practised by all the children above 6 years.</p>
                </div>
            </li>
            <li>
                <span class="number">05</span>
                <div>
                    <h4>How is B-MAT different from other "brain training programs"?</h4>
                    <p>B-MAT is not simply a "brain training " program. B-MAT aims to develop Learning Sense to directly improve academic ability. It's a program that will directly impact academic outcomes.</p>
                </div>
            </li>
            <li>
                <span class="number">06</span>
                <div>
                    <h4>How do I use B-MAT?</h4>
                    <p>B-MAT contains Video Lessons that will show you how to train using the Main Lessons and explain when and how to take Examinations and participate in Competitions. As you progress through the 60 levels of training and pass exams, you will be able to track your progress and accumulate points. We encourage all B-MAT users to participate in competitions like the World Cup and collect points. Points can be exchanged for gifts. Practicing thoroughly before taking exams will increase your chances of accumulating points.</p>
                </div>
            </li>
        </ul>
    </section><!--#faqs-->

@endsection