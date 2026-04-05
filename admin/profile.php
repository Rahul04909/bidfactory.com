<?php
include './header.php';

// Handle Profile Updates
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_profile'])) {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $mobile = $_POST['mobile'] ?? '';
        $params = ['name' => $name, 'email' => $email, 'mobile' => $mobile];

        // Handle Image Upload
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/src/images/';
            $filename = uniqid('profile_') . '.' . pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadDir . $filename)) {
                $params['profile_image'] = $filename;
            }
        }

        $result = $auth->updateUser($userData['id'], $params);
        $status = $result['error'] ? 'error' : 'success';
        $message = $result['message'];
        
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: '$status',
                    title: '" . ($status === 'success' ? 'Updated!' : 'Error') . "',
                    text: '$message',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    if ('$status' === 'success') window.location.href = 'profile.php';
                });
            });
        </script>";
    }

    if (isset($_POST['change_password'])) {
        $currpass = $_POST['current_password'] ?? '';
        $newpass = $_POST['new_password'] ?? '';
        $repeatnewpass = $_POST['repeat_password'] ?? '';

        $result = $auth->changePassword($userData['id'], $currpass, $newpass, $repeatnewpass);
        $status = $result['error'] ? 'error' : 'success';
        $message = $result['message'];

        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: '$status',
                    title: '" . ($status === 'success' ? 'Changed!' : 'Error') . "',
                    text: '$message',
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        </script>";
    }
}
?>

<div class="row">
    <!-- Profile Sidebar -->
    <div class="col-md-4 col-xl-3">
        <div class="card card-primary card-outline shadow-sm border-0">
            <div class="card-body box-profile">
                <div class="text-center position-relative mb-3">
                    <img id="profile-preview" class="profile-user-img img-fluid img-circle border-3 border-primary shadow-sm"
                         src="./src/images/<?= htmlspecialchars($userData['profile_image'] ?? 'user-avtar.png') ?>" 
                         alt="User profile picture" 
                         style="width: 120px; height: 120px; object-fit: cover;">
                </div>
                <h3 class="profile-username text-center font-weight-bold mb-0"><?= htmlspecialchars($userData['name'] ?? 'Admin') ?></h3>
                <p class="text-muted text-center mb-3">System Administrator</p>
                <hr>
                <div class="px-2">
                    <div class="mb-2">
                        <strong class="d-block"><i class="fas fa-envelope mr-1 text-primary"></i> Email</strong>
                        <span class="text-muted small"><?= htmlspecialchars($userData['email'] ?? 'Not provided') ?></span>
                    </div>
                    <div>
                        <strong class="d-block"><i class="fas fa-phone mr-1 text-primary"></i> Mobile</strong>
                        <span class="text-muted small"><?= htmlspecialchars($userData['mobile'] ?? 'Not provided') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Tabs -->
    <div class="col-md-8 col-xl-9">
        <div class="card shadow-sm border-0">
            <div class="card-header p-2 bg-white border-bottom">
                <ul class="nav nav-pills custom-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#settings" data-toggle="tab">
                            <i class="fas fa-user-edit mr-2"></i>Account Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#security" data-toggle="tab">
                            <i class="fas fa-shield-alt mr-2"></i>Security & Password
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4">
                <div class="tab-content">
                    <!-- Profile Info Tab -->
                    <div class="active tab-pane fade show" id="settings">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="update_profile" value="1">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-600">Full Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-right-0"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($userData['name'] ?? '') ?>" required placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-600">Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-right-0"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($userData['email'] ?? '') ?>" required placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-600">Mobile Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-right-0"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="mobile" class="form-control" value="<?= htmlspecialchars($userData['mobile'] ?? '') ?>" placeholder="Enter mobile number">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="form-label font-weight-600">Profile Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="profile_image" class="custom-file-input" id="profileImageInput" onchange="previewImage(this)" accept="image/*">
                                        <label class="custom-file-label text-truncate" for="profileImageInput">Choose new file...</label>
                                    </div>
                                    <small class="text-muted mt-1 d-block"><i class="fas fa-info-circle mr-1"></i> Suggested size: 250x250 pixels. PNG, JPG, or SVG.</small>
                                </div>
                            </div>
                            <div class="border-top pt-3">
                                <button type="submit" class="btn btn-success px-4 shadow-sm">
                                    <i class="fas fa-save mr-2"></i>Save Changes
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Security Tab -->
                    <div class="tab-pane fade" id="security">
                        <form method="POST" class="form-horizontal">
                            <input type="hidden" name="change_password" value="1">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-600">Current Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-light border-right-0"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="current_password" class="form-control" required placeholder="Enter current password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="font-weight-600">New Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-light border-right-0"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="new_password" class="form-control" required placeholder="Enter new password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="font-weight-600">Confirm New Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-light border-right-0"><i class="fas fa-check-double"></i></span>
                                            </div>
                                            <input type="password" name="repeat_password" class="form-control" required placeholder="Repeat new password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="alert alert-info border-0 shadow-sm">
                                        <h6 class="font-weight-bold"><i class="fas fa-shield-alt mr-2"></i>Security Tips</h6>
                                        <ul class="small mb-0 pl-3">
                                            <li>Use at least 8 characters.</li>
                                            <li>Include numbers & symbols.</li>
                                            <li>Don't reuse old passwords.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top pt-3">
                                <button type="submit" class="btn btn-primary px-4 shadow-sm">
                                    <i class="fas fa-sync-alt mr-2"></i>Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .font-weight-600 { font-weight: 600; }
    .custom-pills .nav-link {
        border-radius: 6px;
        color: #6c757d;
        font-weight: 500;
        padding: 10px 20px;
        margin-right: 5px;
        transition: all 0.3s ease;
    }
    .custom-pills .nav-link.active {
        background-color: #28a745 !important;
        color: #fff !important;
        box-shadow: 0 4px 10px rgba(40, 167, 69, 0.2);
    }
    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.1);
    }
    .profile-user-img {
        transition: transform 0.3s ease;
        border: 4px solid #fff;
    }
    .profile-user-img:hover {
        transform: scale(1.05);
    }
    .input-group-text {
        border-right: 0;
    }
    .form-control {
        border-left: 0;
    }
    .form-control:focus + .input-group-prepend .input-group-text {
        border-color: #28a745;
    }
</style>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#profile-preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        // Update label
        $(input).next('.custom-file-label').html(input.files[0].name);
    }
}
</script>

<?php include './footer.php'; ?>