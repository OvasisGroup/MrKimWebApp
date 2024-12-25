


@extends('layouts.app')

@section('title', 'Get App')

@section('content')


<section class="faq_list_header">

</section>
<div class="FaqHeader aos-init aos-animate" data-aos="fade-up">Frequently asked questions<div></div></div>
<div class="faqse">

<ul>
    {% for faq in faqs %}
        <li>
           <div class="faqtitle"> <strong ></strong></div>
            <!-- {% for header in faq.faqheaders.all %} -->
            <div class="accordion-container">                
                <!-- Accordion Section 1 -->
                <div class="accordion-item">
                    
                    <button class="accordion-header"><p>+</p></button>
                    <div class="accordion-content">
                        <p></p>
                    </div>
                   
                </div>
            </div>
            <!-- {% endfor %} -->
        </li>
    {% endfor %}
</ul>
</div>


@endsection