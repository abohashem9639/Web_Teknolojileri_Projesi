</div>
<footer>
    <div class="container">
        <div>
            <h2><a href="../index.html">ABO HASHEM</a></h2>
            <div>
                <a class="facebook" target="_blank" href="https://www.facebook.com/S.abohashem?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                <a class="instagram" target="_blank" href="https://instagram.com/abohashem__/"><i class="fa-brands fa-square-instagram"></i></a>
                <a class="github" target="_blank" href="https://github.com/abohashem9639"><i class="fa-brands fa-square-github"></i></a>
            </div>
        </div>
        <p>&copy; All rights reserved to Abo Hashem</p>
    </div>
</footer>
<script src="../js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script>
        var app = angular.module('loginApp', []);
        app.controller('loginController', function ($scope, $http) {
            $scope.formData = {};

            $scope.submitForm = function () {
                // Form geçerli mi kontrol et
                if ($scope.loginForm.$valid) {
                    // Eğer geçerli ise, sunucuya isteği gönder
                    $http.post('php/login.php', $scope.formData)
                        .then(function (response) {
                            // Sunucudan gelen yanıtı işle
                            console.log(response.data);
                        })
                        .catch(function (error) {
                            // Hata durumunda işle
                            console.error('Hata:', error);
                        });
                } else {
                    // Eğer form geçerli değilse, kullanıcıya bir hata mesajı göster
                    console.log('Form geçerli değil');
                }
            };

        });
    </script>
</body>
</html>
