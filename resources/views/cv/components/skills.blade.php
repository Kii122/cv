<section class="cv-section">
    <h3 class="section-title">Keterampilan</h3>
    
    <h4 style="color: var(--primary); margin-bottom: 1rem;">Teknis</h4>
    @foreach($skills['technical'] as $skill)
    <div class="skill-item">
        <div class="skill-name">
            <span>{{ $skill['name'] }}</span>
            <span>{{ $skill['level'] }}%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-level" style="width: {{ $skill['level'] }}%"></div>
        </div>
    </div>
    @endforeach

    <h4 style="color: var(--primary); margin: 2rem 0 1rem 0;">Profesional</h4>
    @foreach($skills['professional'] as $skill)
    <div class="skill-item">
        <div class="skill-name">
            <span>{{ $skill['name'] }}</span>
            <span>{{ $skill['level'] }}%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-level" style="width: {{ $skill['level'] }}%"></div>
        </div>
    </div>
    @endforeach
</section>