<?php
    session_start();
    if (isset($_SESSION['userid'])) {
        include('includes/uhead.php');
    } else {
        include('includes/head.php');
        include('includes/header.php');
        include('includes/navbar.php');
    }
    include('includes/dbconnect.php');
    
    // Fetch active job positions from database
    $positions_query = "SELECT * FROM job_positions WHERE status = 'Active' ORDER BY date_posted DESC";
    $positions_result = mysqli_query($conn, $positions_query);
    
    // Group positions by type for the sidebar
    $grouped_positions = [];
    while ($position = mysqli_fetch_assoc($positions_result)) {
        $key = str_replace(['Junior ', 'Representative', 'Executive'], '', $position['position_name']);
        $key = trim($key);
        if (!isset($grouped_positions[$key])) {
            $grouped_positions[$key] = [];
        }
        $grouped_positions[$key][] = $position;
    }
    
    // Reset pointer for potential future use
    mysqli_data_seek($positions_result, 0);
?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-blue': '#1e3a8a',
                        'darker-blue': '#1e40af',
                        'navy': '#0f172a',
                        'golden': '#fbbf24',
                        'light-golden': '#fcd34d',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">

<main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-dark-blue to-navy bg-clip-text text-transparent mb-4">
                Careers at Harees Jewellery
            </h1>
            <p class="text-gray-600 text-lg">Join a legacy of elegance and excellence in the jewellery industry</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Dynamic Content Section (changes when clicking positions) -->
                <div id="dynamicContent">
                    <!-- Default Content -->
                    <div id="defaultContent" class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-briefcase text-dark-blue text-xl"></i>
                                </div>
                                <h2 class="text-2xl font-bold text-navy">Join Our Team</h2>
                            </div>

                            <div class="space-y-6 text-gray-700">
                                <p>At Harees Jewellery, we are always on the lookout for passionate, driven, and talented individuals to become a part of our growing family. We value commitment, integrity, and a genuine passion for jewelry.</p>

                                <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                    <i class="fas fa-file-alt text-golden"></i>
                                    How to Apply
                                </h3>
                                <p class="mb-4">If you're interested in working with us, please share your <strong>Biodata / Resume / CV</strong> via email or WhatsApp. Make sure to include the following details:</p>
                                
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Full Name</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Date of Birth & Age</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Contact Number & Email</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Current Address</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Position Applied For (e.g., Sales Executive, Goldsmith, Customer Care, etc.)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Educational Qualification</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Work Experience (with names of previous employers if any)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Expected Salary</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Preferred Work Location (Paravur / Chinnakada / Koottikkada)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check-circle text-golden mt-1"></i>
                                        <span>Passport Size Photo (Optional)</span>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Position Details (hidden by default) -->
                    <div id="positionDetails" class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in hidden">
                        <div class="p-8">
                            <button onclick="hidePositionDetails()" class="mb-4 flex items-center text-golden hover:text-amber-600 transition-colors">
                                <i class="fas fa-arrow-left mr-2"></i> Back to all positions
                            </button>
                            <div class="flex items-center gap-3 mb-6">
                                <div id="positionIcon" class="w-12 h-12 bg-gradient-to-br from-golden to-amber-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-briefcase text-dark-blue text-xl"></i>
                                </div>
                                <div>
                                    <h2 id="positionTitle" class="text-2xl font-bold text-navy"></h2>
                                    <div id="positionMeta" class="flex flex-wrap gap-2 mt-1 text-sm text-gray-500">
                                        <!-- Location, vacancies etc will be inserted here -->
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-6 text-gray-700">
                                <div id="positionDescription"></div>
                                
                                <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                                    <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                        <i class="fas fa-file-alt text-golden"></i>
                                        Requirements
                                    </h3>
                                    <div id="positionRequirements"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Static Content Section (Submit Your Application - remains unchanged) -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-golden/20 animate-fade-in">
                    <div class="p-8">
                        <div class="bg-gradient-to-r from-golden/10 to-amber-100/20 p-6 rounded-xl border border-golden/20">
                            <h3 class="text-xl font-semibold text-navy mb-4 flex items-center gap-2">
                                <i class="fas fa-paper-plane text-golden"></i>
                                Submit Your Application
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <a href="mailto:hareesjewelleryinfo@gmail.com" class="bg-gradient-to-r from-rose-500 to-pink-600 text-white font-bold py-4 px-6 rounded-xl hover:from-rose-600 hover:to-pink-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-envelope text-white text-xl group-hover:scale-110 transition-transform"></i>
                                        <span>EMAIL US</span>
                                    </div>
                                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                                </a>
                                
                                <a href="https://wa.me/+918921387392" target="_blank" class="bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-between group">
                                    <div class="flex items-center gap-3">
                                        <i class="fab fa-whatsapp text-white text-xl group-hover:scale-110 transition-transform"></i>
                                        <span>WHATSAPP</span>
                                    </div>
                                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <p class="text-gray-700 mt-6">Whether you're experienced or just starting out, we'd love to hear from you. Our team will review your application and contact you if there's a suitable opportunity.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <!-- Current Openings Card -->
                    <div class="bg-gradient-to-br from-golden via-amber-500 to-yellow-600 rounded-2xl shadow-2xl p-6 text-dark-blue animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-dark-blue flex items-center gap-2">
                                <i class="fas fa-bullhorn"></i>
                                CURRENT OPENINGS
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <?php foreach ($grouped_positions as $position_type => $positions): ?>
                                <?php
                                    // Determine icon based on position type
                                    $icon = 'briefcase'; // default
                                    if (stripos($position_type, 'Sales') !== false) $icon = 'user-tie';
                                    elseif (stripos($position_type, 'Account') !== false) $icon = 'calculator';
                                    elseif (stripos($position_type, 'Goldsmith') !== false) $icon = 'hammer';
                                    elseif (stripos($position_type, 'Customer') !== false) $icon = 'headset';
                                    
                                    // Prepare data for JavaScript
                                    $positions_data = [];
                                    foreach ($positions as $pos) {
                                        $positions_data[] = [
                                            'title' => $pos['position_name'],
                                            'description' => $pos['description'],
                                            'meta' => $pos['no_of_vacancy'] . ' vacancy/vacancies in ' . $pos['location'],
                                            'requirements' => $pos['experience_required'],
                                            'qualifications' => $pos['qualification']
                                        ];
                                    }
                                    $positions_json = htmlspecialchars(json_encode($positions_data), ENT_QUOTES, 'UTF-8');
                                ?>
                                <div class="flex items-start gap-3 group cursor-pointer" 
                                     onclick="showGroupedPositions('<?php echo $position_type; ?>', '<?php echo $icon; ?>', <?php echo $positions_json; ?>)">
                                    <div class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-white/40 transition-colors">
                                        <i class="fas fa-<?php echo $icon; ?> text-dark-blue text-sm"></i>
                                    </div>
                                    <p class="font-medium group-hover:text-darker-blue transition-colors">
                                        <?php echo $position_type; ?> (<?php echo count($positions); ?>)
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Why Join Us Card -->
                    <div class="bg-gradient-to-br from-dark-blue via-navy to-slate-900 rounded-2xl shadow-2xl p-6 text-white animate-slide-up border border-golden/20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-golden flex items-center gap-2">
                                <i class="fas fa-star"></i>
                                WHY JOIN US?
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gem text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Work with exquisite collections</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-users text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Be part of a growing family business</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-chart-line text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Career growth opportunities</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-rupee-sign text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Competitive compensation</p>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-award text-golden text-sm"></i>
                                </div>
                                <p class="text-white/90">Training and skill development</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Visit Us Card -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-golden/20 animate-slide-up">
                        <h3 class="text-xl font-bold text-navy mb-4 flex items-center gap-2">
                            <i class="fas fa-store text-golden"></i>
                            VISIT OUR STORE
                        </h3>
                        
                        <div class="space-y-3 text-gray-700">
                            <p class="flex items-start gap-2">
                                <i class="fas fa-clock text-golden mt-1"></i>
                                <span>Open: 10 AM - 8 PM (Mon-Sat)</span>
                            </p>
                            <p class="flex items-start gap-2">
                                <i class="fas fa-phone text-golden mt-1"></i>
                                <span>+91 89213 87392</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function showGroupedPositions(type, icon, positions) {
        // Hide default content
        document.getElementById('defaultContent').classList.add('hidden');
        
        // Show position details
        const detailsCard = document.getElementById('positionDetails');
        detailsCard.classList.remove('hidden');
        
        // Set position type header
        document.getElementById('positionTitle').textContent = type + ' Positions';
        document.getElementById('positionIcon').innerHTML = `<i class="fas fa-${icon} text-dark-blue text-xl"></i>`;
        
        // Build description showing all positions of this type
        let descriptionHtml = `<p>We have multiple ${type} positions available across our locations:</p><div class="mt-4 space-y-4">`;
        
        // Build meta info showing count
        let totalVacancies = 0;
        positions.forEach(pos => {
            totalVacancies += parseInt(pos.meta.split(' ')[0]);
        });
        
        const metaHtml = `
            <span class="flex items-center gap-1 bg-blue-100 text-blue-800 px-2 py-1 rounded-full">
                <i class="fas fa-map-marker-alt text-xs"></i>
                <span>${positions.length} positions with ${totalVacancies} total vacancies</span>
            </span>
        `;
        document.getElementById('positionMeta').innerHTML = metaHtml;
        
        // Build position list with details
        positions.forEach((position, index) => {
            descriptionHtml += `
                <div class="border-l-4 border-golden pl-4 py-2">
                    <h4 class="font-semibold text-gray-800">${position.title} (${position.meta})</h4>
                    <p class="text-gray-600 mt-1">${position.description}</p>
                </div>
            `;
        });
        
        descriptionHtml += `</div>`;
        document.getElementById('positionDescription').innerHTML = descriptionHtml;
        
        // Build requirements section
        const requirementsHtml = `
            <div class="mb-4">
                <h4 class="font-semibold text-gray-800 mb-2">Common Requirements:</h4>
                <ul class="list-disc pl-5 space-y-1">
                    ${positions.map(pos => `<li>${pos.requirements}</li>`).join('')}
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">Qualifications:</h4>
                <ul class="list-disc pl-5 space-y-1">
                    ${positions.map(pos => `<li>${pos.qualifications}</li>`).join('')}
                </ul>
            </div>
        `;
        document.getElementById('positionRequirements').innerHTML = requirementsHtml;
    }
    
    function showPositionDetails(title, icon, description, meta, requirements, qualifications) {
        // Hide default content
        document.getElementById('defaultContent').classList.add('hidden');
        
        // Show position details
        const detailsCard = document.getElementById('positionDetails');
        detailsCard.classList.remove('hidden');
        
        // Set position details
        document.getElementById('positionTitle').textContent = title;
        document.getElementById('positionIcon').innerHTML = `<i class="fas fa-${icon} text-dark-blue text-xl"></i>`;
        document.getElementById('positionDescription').innerHTML = `<p>${description}</p>`;
        
        // Set meta info (vacancies, locations)
        const metaHtml = `
            <span class="flex items-center gap-1 bg-blue-100 text-blue-800 px-2 py-1 rounded-full">
                <i class="fas fa-map-marker-alt text-xs"></i>
                <span>${meta}</span>
            </span>
        `;
        document.getElementById('positionMeta').innerHTML = metaHtml;
        
        // Set requirements
        const requirementsHtml = `
            <div class="mb-4">
                <h4 class="font-semibold text-gray-800 mb-2">Experience:</h4>
                <p>${requirements}</p>
            </div>
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">Qualifications:</h4>
                <p>${qualifications}</p>
            </div>
        `;
        document.getElementById('positionRequirements').innerHTML = requirementsHtml;
    }
    
    function hidePositionDetails() {
        document.getElementById('positionDetails').classList.add('hidden');
        document.getElementById('defaultContent').classList.remove('hidden');
    }
</script>

<?php include ('includes/footer.php'); ?>

</body>
</html>