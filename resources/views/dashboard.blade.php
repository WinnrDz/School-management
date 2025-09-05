@extends('layout')

@section('content')
    <main>
        <h1> {{ __('Dashboard') }}</h1>
        <div class="dashboard-tabs">
            <button>Overview</button>
            <button>Charts</button>
            <button>Articles</button>
            <button>Admin</button>
        </div>
        <div class="stats">
            <div>
                <span class="stat">Classes</span>
                <span class="stat-value">5</span>
            </div>
            <div>
                <span class="stat">Students</span>
                <span class="stat-value">100</span>
            </div>
            <div>
                <span class="stat">Attendances</span>
                <span class="stat-value">90</span>
            </div>
            <div>
                <span class="stat">Teachers</span>
                <span class="stat-value">100</span>
            </div>
        </div>

        <div class="article-card">
            <h2>School Announcement</h2>
            <p>
                Welcome to the new semester! Mid-term exams will begin on
                <strong>October 15th</strong>. Students are encouraged to review
                their class schedules and meet with teachers for preparation.
            </p>
            <p>
                Don’t forget: Parent–teacher meetings are scheduled for
                <strong>October 20th</strong>. More details will be shared in the
                “Events” tab.
            </p>
            <button class="read-more">Read More</button>
        </div>
        

@endsection