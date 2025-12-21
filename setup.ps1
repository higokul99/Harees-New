# Laravel Setup Script for Harees Jewellery

Write-Host "🎉 Setting up Harees Jewellery Laravel Application..." -ForegroundColor Green
Write-Host ""

# Step 1: Copy .env file
Write-Host "📋 Step 1: Copying .env.example to .env..." -ForegroundColor Yellow
if (Test-Path ".env") {
    Write-Host "   ⚠️  .env file already exists. Skipping..." -ForegroundColor Cyan
} else {
    Copy-Item ".env.example" ".env"
    Write-Host "   ✅ .env file created!" -ForegroundColor Green
}
Write-Host ""

# Step 2: Generate application key
Write-Host "🔑 Step 2: Generating application key..." -ForegroundColor Yellow
php artisan key:generate
Write-Host ""

# Step 3: Clear caches
Write-Host "🧹 Step 3: Clearing caches..." -ForegroundColor Yellow
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
Write-Host "   ✅ Caches cleared!" -ForegroundColor Green
Write-Host ""

# Step 4: Check database connection
Write-Host "🗄️  Step 4: Checking database configuration..." -ForegroundColor Yellow
Write-Host "   Please ensure your database credentials are correct in .env file" -ForegroundColor Cyan
Write-Host "   Current settings:" -ForegroundColor Cyan
Write-Host "   - DB_CONNECTION=mysql" -ForegroundColor White
Write-Host "   - DB_DATABASE=hjimsdb_localenv" -ForegroundColor White
Write-Host "   - DB_USERNAME=root" -ForegroundColor White
Write-Host "   - DB_PASSWORD=(empty)" -ForegroundColor White
Write-Host ""

# Step 5: List routes
Write-Host "🛣️  Step 5: Available routes..." -ForegroundColor Yellow
php artisan route:list --columns=method,uri,name
Write-Host ""

# Step 6: Instructions
Write-Host "✨ Setup Complete!" -ForegroundColor Green
Write-Host ""
Write-Host "📝 Next Steps:" -ForegroundColor Yellow
Write-Host "   1. Update database credentials in .env file if needed" -ForegroundColor White
Write-Host "   2. Run: php artisan migrate (if you have migrations)" -ForegroundColor White
Write-Host "   3. Run: php artisan serve" -ForegroundColor White
Write-Host "   4. Visit: http://localhost:8000" -ForegroundColor White
Write-Host ""
Write-Host "🔗 Important URLs:" -ForegroundColor Yellow
Write-Host "   - Homepage: http://localhost:8000" -ForegroundColor White
Write-Host "   - Login: http://localhost:8000/login" -ForegroundColor White
Write-Host "   - Register: http://localhost:8000/register" -ForegroundColor White
Write-Host ""
Write-Host "📚 For more information, check README.md" -ForegroundColor Cyan
Write-Host ""
