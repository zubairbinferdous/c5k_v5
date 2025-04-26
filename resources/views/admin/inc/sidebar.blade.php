<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
            <a href="{{ URL::route('dashboard.index') }}">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span> Dashboard </span>
            </a>
        </li>

        @can('isAdmin')
        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-home"></i></span>
                <span> Home </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ URL::route('banner') }}">Banner Section</a>
                    <a href="{{ URL::route('blog') }}">Blog</a>
                    <a href="{{ URL::route('blog_banner') }}">Blog Banner</a>
                    <a href="{{ URL::route('news') }}">News</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span> Articles </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ URL::route('article.approve') }}">Approve List</a>
                    <a href="{{ URL::route('article.pending') }}">Pending List</a>
                    <a href="{{ URL::route('article.reject') }}">Reject List</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ URL::route('article-category.index') }}">
                <span class="icon"><i class="fas fa-align-justify"></i></span>
                <span> Article Category </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('article-html.index') }}">
                <span class="icon"><i class="fas fa-align-justify"></i></span>
                <span> Article HTML </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('journal.index') }}">
                <span class="icon"><i class="fas fa-journal-whills"></i></span>
                <span> Journal </span>
            </a>
        </li>
        <li>
            <a href="{{ URL::route('journal.editorial') }}">
                <span class="icon"><i class="fas fa-journal-whills"></i></span>
                <span> Journal Editorial </span>
            </a>
        </li>
        <li>
        <a href="{{ URL::route('journal.award') }}">
                <span class="icon"><i class="fas fa-journal-whills"></i></span>
                <span> Best Paper Award </span>
            </a>
        </li>
        <li>
            <a href="{{ URL::route('comment.index') }}">
                <span class="icon"><i class="fas fa-comments"></i></span>
                <span> Comments </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('requirement.index') }}">
                <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                <span> Requirements </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('reviewer.index') }}">
                <span class="icon"><i class="fas fa-user-tag"></i></span>
                <span> Reviewers </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('author.index') }}">
                <span class="icon"><i class="fas fa-user-edit"></i></span>
                <span> Authors </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('profile.index') }}">
                <span class="icon"><i class="fas fa-users-cog"></i></span>
                <span> Profile </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('setting.index') }}">
                <span class="icon"><i class="fas fa-cog"></i></span>
                <span> Settings </span>
            </a>
        </li>
        @endcan


        @can('isReviewer')
        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span> Articles </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ URL::route('reviewer.article.approve') }}">Approve List</a>
                    <a href="{{ URL::route('reviewer.article.pending') }}">Pending List</a>
                    <a href="{{ URL::route('reviewer.article.reject') }}">Reject List</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ URL::route('reviewer.profile.index') }}">
                <span class="icon"><i class="fas fa-users-cog"></i></span>
                <span> Profile </span>
            </a>
        </li>
        @endcan


        @can('isAuthor')
        <li>
            <a href="{{ URL::route('author.article.index') }}">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span> Articles </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('author.issue.index') }}">
                <span class="icon"><i class="fas fa-question-circle"></i></span>
                <span> Issues </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('author.profile.index') }}">
                <span class="icon"><i class="fas fa-users-cog"></i></span>
                <span> Profile </span>
            </a>
        </li>
        @endcan

    </ul>

</div>
<!-- End Sidebar -->