//test 1
describe("render website link-wisata", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/tempatwisata");
    });
});

//test 2
describe("mengisi form transaksi input valid", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Bella Sonia");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("086709218731");
        cy.get("select").select("Masjid Merah").should("have.value", "1");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("5");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("2");
        cy.findByPlaceholderText("Harga Tiket").type("20000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 3
describe("mengisi form transaksi input pengunjung dewasa 0", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Bella Sonia");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("086709218731");
        cy.get("select").select("Masjid Merah").should("have.value", "1");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("0");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("2");
        cy.findByPlaceholderText("Harga Tiket").type("20000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 4
describe("mengisi form transaksi input pengunjung anak invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Bella Sonia");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("086709218731");
        cy.get("select").select("Masjid Merah").should("have.value", "1");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("5");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("$");
        cy.findByPlaceholderText("Harga Tiket").type("20000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 5
describe("mengisi form transaksi input pengunjung anak 0", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Bella Sonia");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("086709218731");
        cy.get("select").select("Masjid Merah").should("have.value", "1");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("5");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("0");
        cy.findByPlaceholderText("Harga Tiket").type("20000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 6
describe("mengisi form transaksi input nama lengkap invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("~!@#$%^&*()_+1");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("086709218731");
        cy.get("select").select("Masjid Merah").should("have.value", "1");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("5");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("2");
        cy.findByPlaceholderText("Harga Tiket").type("20000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});
