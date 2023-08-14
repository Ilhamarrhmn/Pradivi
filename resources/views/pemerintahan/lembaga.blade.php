@extends('layouts.app')

@section('title', 'Lembaga Kelurahan')

@section('content')

    <div class="mt-4 pt-3 pb-1 px-4 rounded" style="background-color: rgb(243, 243, 243)">
        <small>{{ Breadcrumbs::render('lembaga') }}</small>
    </div>

    <h3 class="mt-3">Lembaga Kelurahan</h3>
    <div class="mb-5 text-muted" style="text-align:justify;">
        <h6 class="mt-4">LEMBAGA KEMASYARAKATAN KELURAHAN</h6>
        <p>
            Berdasarkan Peraturan Bupati (Perbup) Nomor 61 Tahun 2019 tentang Lembaga Kemasyarakatan Kelurahan, terdapat beberapa lembaga kemasyarakatan yang memiliki peran penting dalam menggerakkan pembangunan, pemberdayaan masyarakat, dan kehidupan sosial di tingkat kelurahan. Berikut adalah penjelasan singkat mengenai setiap lembaga tersebut:
        </p>
        <ol>
            <li>Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK):
                LPMK merupakan lembaga yang bertanggung jawab dalam memfasilitasi partisipasi aktif masyarakat dalam pengambilan keputusan dan pembangunan di tingkat kelurahan. LPMK berperan dalam menggali potensi masyarakat, merumuskan rencana pembangunan partisipatif, dan mengawasi pelaksanaan program pembangunan.
            </li>
            <li>Tim Penggerak Pemberdayaan Kesejahteraan Keluarga (TP. PKK):
                TP. PKK adalah lembaga yang fokus pada program pemberdayaan keluarga dan kesejahteraan masyarakat. Mereka berperan dalam mengadakan program-program pendidikan, kesehatan, ekonomi, dan sosial yang bertujuan untuk meningkatkan kualitas hidup masyarakat.
            </li>
            <li>Karang Taruna:
                Karang Taruna adalah organisasi kepemudaan yang bergerak dalam bidang sosial dan kemasyarakatan. Mereka bertugas menghimpun dan membina potensi serta kreativitas pemuda di kelurahan untuk berpartisipasi aktif dalam kegiatan sosial, kultural, dan pembangunan masyarakat.
            </li>
            <li>Rukun Warga (RW):
                RW adalah lembaga yang mewakili warga dari beberapa RT dalam suatu wilayah kelurahan tertentu. RW berperan dalam mengkoordinasikan kegiatan dan program di tingkat wilayah yang lebih luas.
            </li>
            <li>Rukun Tetangga (RT):
                RT adalah lembaga yang mewakili warga dari suatu wilayah kecil atau lingkungan dalam kelurahan. RT berfungsi sebagai unit terkecil dalam struktur pemerintahan kelurahan dan berperan dalam menyampaikan aspirasi dan kebutuhan masyarakat di tingkat yang lebih terdekat.
            </li>
            <li>Anggota Linmas:
                Linmas adalah singkatan dari "Perlindungan Masyarakat." Anggota Linmas adalah relawan masyarakat yang bertugas membantu menjaga ketentraman dan ketertiban di lingkungan kelurahan. Mereka berperan dalam mendukung tugas keamanan dan ketertiban yang dilakukan oleh aparat keamanan formal.
            </li>
            <li>Pos Pelayanan Terpadu (Posyandu):
                Posyandu adalah pos pelayanan kesehatan dan pemberdayaan keluarga. Posyandu menyediakan layanan kesehatan, pertumbuhan balita, dan kesejahteraan keluarga di tingkat kelurahan.
            </li>
            <li>Majelis Ulama Indonesia (MUI):
                MUI adalah lembaga yang mewakili ulama atau tokoh agama Islam di tingkat kelurahan. Mereka berperan dalam memberikan arahan dan panduan keagamaan kepada masyarakat serta berkontribusi dalam penyelesaian masalah keagamaan dan sosial di tingkat lokal.
            </li>
            <li>Badan Keswadayaan:
                Badan Keswadayaan adalah lembaga kemasyarakatan yang berfokus pada pemberdayaan masyarakat melalui program-program swadaya yang berbasis pada potensi lokal dan kearifan lokal.
            </li>
        </ol>
        <p>
            Kelompok Tani, yang tidak disebutkan dalam Perbup tersebut, biasanya berperan dalam sektor pertanian. Kelompok Tani adalah kelompok masyarakat yang memiliki aktivitas bercocok tanam bersama dan saling mendukung dalam hal pertanian, seperti penanaman, panen, dan kegiatan pertanian lainnya.
        </p>
        <p>
            Setiap lembaga kemasyarakatan memiliki peran yang penting dalam mendorong pembangunan dan pemberdayaan masyarakat di tingkat kelurahan. Dengan saling bekerja sama dan berkoordinasi, lembaga-lembaga ini dapat menciptakan lingkungan yang lebih baik, harmonis, dan berdaya saing bagi masyarakat setempat.
        </p>
        <h6 class="mt-4">MITRA KELURAHAN</h6>
        <ol>
            <li>Babinsa (Bintara Pembina Desa):
                Babinsa adalah seorang anggota TNI AD (Tentara Nasional Indonesia Angkatan Darat) yang bertugas sebagai pembina desa. Tugasnya adalah menjalin hubungan baik dengan masyarakat di desa dan membantu memfasilitasi kegiatan pemerintahan serta pembangunan di tingkat desa. Babinsa juga berperan dalam membantu menjaga keamanan dan ketertiban di wilayah desa.
            </li>
            <li>Bhabinkamtibmas (Bhayangkara Pembinaan Keamanan dan Ketertiban Masyarakat):
                Bhabinkamtibmas adalah seorang anggota kepolisian yang bertugas sebagai pembina keamanan dan ketertiban masyarakat di wilayah kelurahan atau desa. Tugasnya adalah menjalin hubungan baik dengan masyarakat, membantu memfasilitasi program pemerintah, serta memberikan pelayanan dan perlindungan keamanan kepada warga.
            </li>
            <li>Bidan Pembina Kelurahan:
                Bidan Pembina Kelurahan adalah seorang bidan yang bekerja di tingkat kelurahan. Tugasnya meliputi pelayanan kesehatan, penyuluhan kesehatan, serta pembinaan kesehatan dan kesejahteraan masyarakat di wilayah kelurahan.
            </li>
            <li>Penyuluh Pertanian:
                Penyuluh Pertanian adalah seorang ahli pertanian yang ditugaskan untuk memberikan penyuluhan dan pendampingan kepada petani di wilayah kelurahan. Tugasnya adalah memberikan informasi dan teknis pertanian, menyediakan pelatihan, dan membantu petani meningkatkan hasil pertanian serta kesejahteraan ekonomi mereka.
            </li>
            <li>Penyuluh KB (Keluarga Berencana):
                Penyuluh KB adalah seorang tenaga kesehatan atau ahli yang bertugas memberikan penyuluhan dan informasi tentang program keluarga berencana. Mereka membantu menyampaikan manfaat dan cara-cara melaksanakan program KB untuk masyarakat di kelurahan.
            </li>
            <li>Penyuluh Sosial Masyarakat (PSM):
                Penyuluh Sosial Masyarakat adalah seorang profesional yang bekerja di bidang sosial dan kesejahteraan masyarakat. Tugasnya adalah memberikan bantuan, dukungan, dan pendampingan kepada kelompok masyarakat yang membutuhkan, seperti anak-anak terlantar, penyandang disabilitas, dan keluarga kurang mampu.
            </li>
            <li>Tim Reaksi Cepat (TRC):
                TRC adalah tim yang dibentuk untuk merespons keadaan darurat atau kejadian yang memerlukan tindakan cepat. Mereka berperan dalam memberikan pertolongan pertama, evakuasi, dan pendampingan korban dalam situasi bencana atau kejadian krisis lainnya.
            </li>
            <li>Relawan Penanggulangan Bencana:
                Relawan Penanggulangan Bencana adalah masyarakat sukarelawan yang berlatih dan berpartisipasi dalam upaya penanggulangan bencana. Mereka membantu pemerintah dan lembaga terkait dalam memberikan bantuan dan pendampingan kepada korban bencana serta mendukung upaya pemulihan pasca bencana.
            </li>
        </ol>
    </div>
@endsection