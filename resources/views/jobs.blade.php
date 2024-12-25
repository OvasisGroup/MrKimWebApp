@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="jobs_list_header">
user
</section>

<section class="jobs_list">

    <!-- {% for job in page_obj %} -->
              <div class="job">
                <div>
                  <h3>title</h3>
                  <p>description</p>
                </div>
                <ul>
                  <!-- {% for categories in job.category.all %} -->
                  <li>category name</li>
                  <!-- {% endfor %} -->
                </ul>

                
                <a href="{% url 'jobs_detail' job.id %}"><button>View Details</button></a>
                
              </div>
              <!-- {% endfor %} -->
              <div class="pagination">
                pagination
            </div>
</section>

@endsection