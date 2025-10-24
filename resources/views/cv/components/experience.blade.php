<section class="cv-section">
    <h3 class="section-title">Pengalaman</h3>
    <div class="timeline">
        @foreach($experience as $exp)
        <div class="timeline-item">
            <div class="timeline-period">{{ $exp['period'] }}</div>
            <h4 class="timeline-title">{{ $exp['position'] }}</h4>
            <div class="timeline-subtitle">{{ $exp['company'] }}</div>
            <p>{{ $exp['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>