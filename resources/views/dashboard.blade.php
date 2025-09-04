<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <nav>
        <img src="{{ asset('images/School-management Logo.png') }}" alt="logo" class="logo">
        <div class="btns-grps">
            <img src="{{ asset('images/user.png') }}" alt="profile" class="profile-img">
            <img src="{{ asset('images/settings.png') }}" alt="settings" class="settings-img">
            <img src="{{ asset('images/bell.png') }}" alt="bell" class="bell-img">
        </div>
        <input type="search" placeholder="Search for..." />
        <div class="menu">
            <div class="classes"><img src="{{ asset('images/class.png') }}" alt="class" class="user-class-img"><span>Classes</span></div>
            <div class="students"><img src="{{ asset('images/student.png') }}" alt="students" class="student-img"><span>Students</span></div>
            <div class="attendances"><img src="{{ asset('images/person-circle-check.png') }}" alt="person-circle-checks" class="person-circle-check-img"><span>Attendances</span></div>
            <div class="teachers"><img src="{{ asset('images/lesson-class.png') }}" alt="teacher" class="teacher-img"><span>Teachers</span></div>
            <div class="subjects"><img src="{{ asset('images/books.png') }}" alt="subject" class="subject-img"><span>Subjects</span></div>
            <div class="grades"><img src="{{ asset('images/test.png') }}" alt="grades" class="grade-img"><span>Grades</span></div>
        </div>
    </nav>
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
        

    </main>

</body>

</html>