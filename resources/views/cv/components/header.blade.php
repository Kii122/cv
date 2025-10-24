<header class="cv-header">
    <div class="profile-container">
        
        <img 
            src="/images/Foto.jpg" 
            alt="Foto Rifki Alfaris" 
            class="profile-photo"
        >
        
        <div class="profile-info">
            
            <h1 class="cv-name">{{ $personalInfo['name'] }}</h1>
            
            
            <div class="contact-info">
                <div class="contact-item">
                    <span>📧</span>
                    <span>{{ $personalInfo['email'] }}</span>
                </div>
                <div class="contact-item">
                    <span>📱</span>
                    <span>{{ $personalInfo['phone'] }}</span>
                </div>
                <div class="contact-item">
                    <span>📍</span>
                    <span>{{ $personalInfo['location'] }}</span>
                </div>
                <div class="contact-item">
                    <span>💼</span>
                    <span>{{ $personalInfo['linkedin'] }}</span>
                </div>
                <div class="contact-item">
                    <span>🔗</span>
                    <span>{{ $personalInfo['github'] }}</span>
                </div>
            </div>
        </div>
    </div>
</header>