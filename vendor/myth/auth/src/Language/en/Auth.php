<?php

namespace Myth\Auth\Language\en;

return [
    // Exceptions
    'invalidModel'        => 'The {0} model must be loaded prior to use.',
    'userNotFound'        => 'Unable to locate a user with ID = {0, number}.',
    'noUserEntity'        => 'User Entity must be provided for password validation.',
    'tooManyCredentials'  => 'You may only validate against 1 credential other than a password.',
    'invalidFields'       => 'The "{0}" field cannot be used to validate credentials.',
    'unsetPasswordLength' => 'You must set the `minimumPasswordLength` setting in the Auth config file.',
    'unknownError'        => 'Sorry, we encountered an issue sending the email to you. Please try again later.',
    'notLoggedIn'         => 'You must be logged in to access that page.',
    'notEnoughPrivilege'  => 'You do not have sufficient permissions to access that page.',

    // Registration
    'registerDisabled' => 'Sorry, new user accounts are not allowed at this time.',
    'registerSuccess'  => 'Selamat Datang! Silakan login dengan akun baru anda.',
    'registerCLI'      => 'User baru telah dibuat: {0}, #{1}',
    // 'registerDisabled' => 'Sorry, new user accounts are not allowed at this time.',
    // 'registerSuccess'  => 'Welcome aboard! Please login with your new credentials.',
    // 'registerCLI'      => 'New user created: {0}, #{1}',

    // Activation
    'activationNoUser'       => 'Unable to locate a user with that activation code.',
    'activationSubject'      => 'Harap aktifkan akun anda',
    'activationSuccess'      => 'Silakan mengkatifkan akun anda dengan mengunjungi tautan yang telah kami kirim ke email anda.',
    'activationResend'       => 'Kirim pesan aktivasi sekali lagi.',
    'notActivated'           => 'Akun anda belum diaktifkan.',
    'errorSendingActivation' => 'Gagal mengirim pesan aktivasi ke: {0}',
    // 'activationNoUser'       => 'Unable to locate a user with that activation code.',
    // 'activationSubject'      => 'Activate your account',
    // 'activationSuccess'      => 'Please confirm your account by clicking the activation link in the email we have sent.',
    // 'activationResend'       => 'Resend activation message one more time.',
    // 'notActivated'           => 'This user account is not yet activated.',
    // 'errorSendingActivation' => 'Failed to send activation message to: {0}',

    // Login
    'badAttempt'      => 'Tidak bisa membawa anda masuk, silakan cek kembali akun anda.',
    'loginSuccess'    => 'Selamat Datang!',
    'invalidPassword' => 'Tidak bisa membawa anda masuk, silakan cek kembali password anda.',
    // 'badAttempt'      => 'Unable to log you in. Please check your credentials.',
    // 'loginSuccess'    => 'Welcome back!',
    // 'invalidPassword' => 'Unable to log you in. Please check your password.',

    // Forgotten Passwords
    'forgotDisabled'  => 'Reset password telah di non-aktifkan.',
    'forgotNoUser'    => 'Akun anda tidak terdaftar dalam database kami.',
    'forgotSubject'   => 'Instruksi untuk mereset passwprd',
    'resetSuccess'    => 'Password anda telah berhasil diganti. Silakan login dengan password baru anda.',
    'forgotEmailSent' => 'Kode keamanan telah kami kirimkan ke email anda. Harap buka tautan yang kami kirimkan untuk melanjutkan.',
    'errorEmailSent'  => 'Gagal untuk mengirim email instruksi reset password ke: {0}',
    'errorResetting'  => 'Gagal untuk mengirim instruksi reset password ke {0}',
    // 'forgotDisabled'  => 'Reseting password option has been disabled.',
    // 'forgotNoUser'    => 'Unable to locate a user with that email.',
    // 'forgotSubject'   => 'Password Reset Instructions',
    // 'resetSuccess'    => 'Your password has been successfully changed. Please login with the new password.',
    // 'forgotEmailSent' => 'A security token has been emailed to you. Enter it in the box below to continue.',
    // 'errorEmailSent'  => 'Unable to send email with password reset instructions to: {0}',
    // 'errorResetting'  => 'Unable to send reset instructions to {0}',

    // Passwords
    'errorPasswordLength'         => 'Password harus memiliki panjang minimal {0, number} karakter.',
    'suggestPasswordLength'       => 'Password - sampai dengan 255 karakter - pastikan password anda mudah untuk diingat.',
    'errorPasswordCommon'         => 'Password tidak boleh umum digunakan.',
    'suggestPasswordCommon'       => 'Password diperiksa terhadap lebih dari 200 ribu password atau password yang umum digunakan, dan telah bocor melalui peretasan.',
    'errorPasswordPersonal'       => 'Password tidak boleh mengandung informasi personal.',
    'suggestPasswordPersonal'     => 'Variasi dari email atau username anda tidak boleh digunakan sebagai password.',
    'errorPasswordTooSimilar'     => 'Password terlalu sama dengan username.',
    'suggestPasswordTooSimilar'   => 'Jangan gunakan bagian dari username untuk password anda.',
    'errorPasswordPwned'          => 'The password {0} has been exposed due to a data breach and has been seen {1, number} times in {2} of compromised passwords.',
    'suggestPasswordPwned'        => '{0} should never be used as a password. If you are using it anywhere change it immediately.',
    'errorPasswordPwnedDatabase'  => 'a database',
    'errorPasswordPwnedDatabases' => 'databases',
    'errorPasswordEmpty'          => 'Password harus diisi.',
    'passwordChangeSuccess'       => 'Password telah berhasil diganti',
    'userDoesNotExist'            => 'Password gagal diperbarui. Akun tidak ada dalam database',
    'resetTokenExpired'           => 'Maaf. Kode token anda telah kadaluarsa.',
    // 'errorPasswordLength'         => 'Passwords must be at least {0, number} characters long.',
    // 'suggestPasswordLength'       => 'Pass phrases - up to 255 characters long - make more secure passwords that are easy to remember.',
    // 'errorPasswordCommon'         => 'Password must not be a common password.',
    // 'suggestPasswordCommon'       => 'The password was checked against over 65k commonly used passwords or passwords that have been leaked through hacks.',
    // 'errorPasswordPersonal'       => 'Passwords cannot contain re-hashed personal information.',
    // 'suggestPasswordPersonal'     => 'Variations on your email address or username should not be used for passwords.',
    // 'errorPasswordTooSimilar'     => 'Password is too similar to the username.',
    // 'suggestPasswordTooSimilar'   => 'Do not use parts of your username in your password.',
    // 'errorPasswordPwned'          => 'The password {0} has been exposed due to a data breach and has been seen {1, number} times in {2} of compromised passwords.',
    // 'suggestPasswordPwned'        => '{0} should never be used as a password. If you are using it anywhere change it immediately.',
    // 'errorPasswordPwnedDatabase'  => 'a database',
    // 'errorPasswordPwnedDatabases' => 'databases',
    // 'errorPasswordEmpty'          => 'A Password is required.',
    // 'passwordChangeSuccess'       => 'Password changed successfully',
    // 'userDoesNotExist'            => 'Password was not changed. User does not exist',
    // 'resetTokenExpired'           => 'Sorry. Your reset token has expired.',

    // Groups
    'groupNotFound' => 'Unable to locate group: {0}.',

    // Permissions
    'permissionNotFound' => 'Unable to locate permission: {0}',

    // Banned
    'userIsBanned' => 'Akun anda telah di non-aktifkan. Hubungi developer',

    // Too many requests
    'tooManyRequests' => 'Telalu banyak request. Harap tunggu {0, number} detik.',

    // Login views
    'home'                      => 'Home',
    'current'                   => 'Current',
    'forgotPassword'            => 'Lupa Password?',
    'enterEmailForInstructions' => 'No problem! Enter your email below and we will send instructions to reset your password.',
    'email'                     => 'Email',
    'emailAddress'              => 'Email Address',
    'sendInstructions'          => 'Send Instructions',
    'loginTitle'                => 'Login',
    'loginAction'               => 'Login',
    'rememberMe'                => 'Ingat saya',
    'needAnAccount'             => 'Butuh akun?',
    'forgotYourPassword'        => 'Lupa password anda?',
    'password'                  => 'Password',
    'repeatPassword'            => 'Ulangi Password',
    'emailOrUsername'           => 'Email atau username',
    'username'                  => 'Username',
    'register'                  => 'Register',
    'signIn'                    => 'Sign In',
    'alreadyRegistered'         => 'Sudah Daftar?',
    'weNeverShare'              => 'We\'ll never share your email with anyone else.',
    'resetYourPassword'         => 'Reset Password Anda',
    'enterCodeEmailPassword'    => 'Masukkan kode token yang anda terima via email, email anda, dan password baru anda.',
    'token'                     => 'Token',
    'newPassword'               => 'Password Baru',
    'newPasswordRepeat'         => 'Ulangi Password Baru',
    'resetPassword'             => 'Reset Password',
];
