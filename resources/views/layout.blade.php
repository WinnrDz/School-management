<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <img src="{{ asset('images/School-management Logo.png') }}" onclick="window.location.href=`{{ route('dashboard') }}`" alt="logo" class="logo">
        <div class="btns-grps">
            <img src="{{ asset('images/user.png') }}" alt="profile" class="profile-img">
            <img src="{{ asset('images/settings.png') }}" alt="settings" class="settings-img">
            <img src="{{ asset('images/bell.png') }}" alt="bell" class="bell-img">
        </div>
        <input type="search" placeholder="Search for..." />
        <div class="menu">
            <div onclick="window.location.href=`{{ route('schoolClasses.index') }}`"  class="classes"><img src="{{ asset('images/class.png') }}" alt="class" class="user-class-img"><span>Classes</span></div>
            <div onclick="window.location.href=`{{ route('students.index') }}`"  class="students"><img src="{{ asset('images/student.png') }}" alt="students" class="student-img"><span>Students</span></div>
            <div onclick="window.location.href=`{{ route('attendances.index') }}`"  class="attendances"><img src="{{ asset('images/person-circle-check.png') }}" alt="person-circle-checks" class="person-circle-check-img"><span>Attendances</span></div>
            <div onclick="window.location.href=`{{ route('teachers.index') }}`"  class="teachers"><img src="{{ asset('images/lesson-class.png') }}" alt="teacher" class="teacher-img"><span>Teachers</span></div>
            <div onclick="window.location.href=`{{ route('subjects.index') }}`"  class="subjects"><img src="{{ asset('images/books.png') }}" alt="subject" class="subject-img"><span>Subjects</span></div>
            <div onclick="window.location.href=`{{ route('grades.index') }}`"  class="grades"><img src="{{ asset('images/test.png') }}" alt="grades" class="grade-img"><span>Grades</span></div>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>
</body>

</html>