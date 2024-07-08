<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>User Dashboard</title>
    @include('../cssjss')
    <style>
        .dashboard-container {
    margin-top: 50px;
}

.user-dashboard-card {
    background-color: #ffffff;
    border: 1px solid #e3e3e3;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.user-dashboard-card .card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #e3e3e3;
    font-size: 1.25rem;
    font-weight: 600;
    padding: 15px 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.user-dashboard-card .welcome-message {
    font-size: 1.1rem;
    font-weight: 500;
    color: #555555;
    padding: 20px;
    text-align: center;
}

.user-dashboard-card .user-info h1 {
    font-size: 2rem;
    font-weight: 700;
    color: #333333;
    margin-bottom: 20px;
    text-align: center;
}

.user-dashboard-card .user-info {
    padding: 20px;
    text-align: center;
}

.user-dashboard-card .btn-danger {
    background-color: #ff5a5f;
    border-color: #ff5a5f;
    font-size: 1rem;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.user-dashboard-card .btn-danger:hover {
    background-color: #e04848;
    border-color: #e04848;
}

@media (max-width: 768px) {
    .user-dashboard-card {
        margin-top: 20px;
    }

    .user-dashboard-card .card-header {
        font-size: 1rem;
        padding: 10px 15px;
    }

    .user-dashboard-card .welcome-message {
        font-size: 1rem;
        padding: 15px;
    }

    .user-dashboard-card .user-info h1 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .user-dashboard-card .btn-danger {
        font-size: 0.9rem;
        padding: 8px 16px;
    }
}

    </style>
</head>
@include('../navigation.header')
<div class="container dashboard-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card user-dashboard-card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body welcome-message">
                    You are logged in as a User!
                </div>

                <div class="card-body user-info">
                    <h1>{{ auth()->user()->name }}</h1>

                    <form action="{{ route('user.logout') }}" method="POST" id="logout-form">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 </body>
</html>