<section class="cv-section">
    <h3 class="section-title">Pendidikan</h3>
    <div class="timeline">
        @foreach($education as $edu)
        <div class="timeline-item">
            <div class="timeline-period">{{ $edu['period'] }}</div>
            <h4 class="timeline-title">{{ $edu['degree'] }}</h4>
            <div class="timeline-subtitle">{{ $edu['institution'] }}</div>
            <p>{{ $edu['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>