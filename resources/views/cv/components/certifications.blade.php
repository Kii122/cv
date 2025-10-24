<section class="cv-section">
    <h3 class="section-title">Sertifikasi</h3>
    <div class="timeline">
        @foreach($certifications as $cert)
        <div class="timeline-item">
            <div class="timeline-period">{{ $cert['year'] }}</div>
            <h4 class="timeline-title">{{ $cert['name'] }}</h4>
            <div class="timeline-subtitle">{{ $cert['issuer'] }}</div>
        </div>
        @endforeach
    </div>
</section>