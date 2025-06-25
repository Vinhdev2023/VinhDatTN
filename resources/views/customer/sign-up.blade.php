
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký - Nhà Sách Vinh Đạt</title>
    <link rel="shortcut icon" href="/customer_plugin/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2c6e49;
            --secondary: #4c956c;
            --accent: #d68c45;
            --light: #fefee3;
            --dark: #1d3525;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #f0f7ff 0%, #e6f7e9 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--dark);
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            width: 100%;
        }
        
        .sign-wrapper {
            display: flex;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .banner-section {
            flex: 1;
            background: linear-gradient(rgba(44, 110, 73, 0.85), rgba(44, 110, 73, 0.9)), url('https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1350&q=80') center/cover;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            min-height: 600px;
        }
        
        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .banner-section h1 {
            font-family: 'Noto Serif', serif;
            font-size: 2.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .banner-section p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .features {
            text-align: left;
            margin-top: 40px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.4rem;
        }
        
        .sign-section {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo h2 {
            font-family: 'Noto Serif', serif;
            font-size: 2.2rem;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .logo h2 i {
            color: var(--accent);
        }
        
        .logo p {
            color: #666;
            font-size: 1rem;
            margin-top: 5px;
        }
        
        .sign-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }
        
        .sign-box h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 10px;
            text-align: center;
        }
        
        .sign-box p {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #444;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 1.1rem;
        }
        
        .form-control {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border: 2px solid #e1e5eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(76, 149, 108, 0.2);
            outline: none;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .terms {
            display: flex;
            align-items: flex-start;
            margin: 20px 0 25px;
        }
        
        .terms input {
            margin-top: 4px;
            margin-right: 10px;
        }
        
        .terms label {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .terms a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .terms a:hover {
            text-decoration: underline;
        }
        
        .btn-signup {
            display: block;
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .btn-signup:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(44, 110, 73, 0.3);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }
        
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e1e5eb;
        }
        
        .divider span {
            padding: 0 15px;
            color: #777;
            font-size: 0.9rem;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .fb { background: #3b5998; }
        .gg { background: #db4a39; }
        .tw { background: #1da1f2; }
        
        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        
        .login-link {
            text-align: center;
            font-size: 1rem;
            color: #555;
        }
        
        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 992px) {
            .banner-section {
                display: none;
            }
            
            .sign-wrapper {
                max-width: 600px;
                margin: 0 auto;
            }
        }
        
        @media (max-width: 576px) {
            .sign-section {
                padding: 30px 20px;
            }
            
            .sign-box {
                padding: 30px 20px;
            }
        }
        
        /* Animation effects */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
</head>
<body>
    <div class="container">
        <div class="sign-wrapper">
            <!-- Banner Section -->
            <div class="banner-section">
                <div class="banner-content">
                    <h1>Nhà Sách Vinh Đạt</h1>
                    <p>Khám phá thế giới tri thức với hàng ngàn đầu sách chất lượng, đa dạng thể loại</p>
                </div>
            </div>
            
            <!-- Sign Up Section -->
            <div class="sign-section">
                <div class="logo">
                    <h2><i class="fas fa-book"></i> Vinh Đạt Bookstore</h2>
                    <p>Tri thức là nguồn sáng vô tận</p>
                </div>
                
                <div class="sign-box">
                    <h3>Tạo tài khoản mới</h3>
                    <p>Tham gia cộng đồng yêu sách của chúng tôi</p>

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger fade-in">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form class="form-text" action="{{ route('customer.sign_up') }}" method="post">
                        @csrf
                        <div class="form-group fade-in">
                            <label for="fullname">Họ và tên</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" value="{{ old('name') }}" id="fullname" class="form-control" placeholder="Nhập họ và tên đầy đủ" required>
                            </div>
                        </div>
                        
                        <div class="form-group fade-in delay-1">
                            <label for="email">Email</label>
                            <div class="input-with-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="Nhập địa chỉ email" required>
                            </div>
                        </div>
                        
                        <div class="form-group fade-in delay-2">
                            <label for="password">Mật khẩu</label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Tạo mật khẩu" required>
                                <button type="button" class="password-toggle">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-group fade-in delay-3">
                            <label for="confirm-password">Xác nhận mật khẩu</label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password_confirmation" id="confirm-password" class="form-control" placeholder="Nhập lại mật khẩu" required>
                                <button type="button" class="password-toggle">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="terms fade-in delay-4">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">Tôi đồng ý với <a href="#">Điều khoản sử dụng</a> và <a href="#">Chính sách bảo mật</a> của Nhà Sách Vinh Đạt</label>
                        </div>
                        <button type="submit" class="btn-signup fade-in delay-4">Đăng ký tài khoản</button>
                        
                        <div class="login-link fade-in delay-4">
                            Đã có tài khoản? <a href="/sign-in">Đăng nhập ngay</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Password toggle functionality
        document.querySelectorAll('.password-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
        
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            fadeElements.forEach(el => {
                el.style.opacity = '0';
            });
            
            setTimeout(() => {
                fadeElements.forEach(el => {
                    el.style.opacity = '1';
                });
            }, 100);
        });
    </script>
</body>
</html>