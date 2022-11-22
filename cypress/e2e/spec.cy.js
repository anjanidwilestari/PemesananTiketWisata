// describe("empty spec", () => {
//     it("passes", () => {
//         cy.visit("https://example.cypress.io");
//     });
// });

// describe("My First Test", () => {
//     it("Does not do much!", () => {
//         expect(true).to.equal(false);
//     });
// });

//test 1
describe("render website link-beranda", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/");
    });
});

//test 2
describe("render website link-wisata", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/tempatwisata");
    });
});

//test 3
describe("mengisi form transaksi input valid", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 4
describe("mengisi form transaksi input no hp invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("aaaaaaaaaaaa");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 5
describe("mengisi form transaksi input no identitas invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("aaaaaaaaaaaaaaaa");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 6
describe("mengisi form transaksi input pengunjung dewasa invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("a");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 7
describe("mengisi form transaksi input harga tiket 0", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("0");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 8
describe("mengisi form transaksi input pengunjung dewasa 0", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("0");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 9
describe("mengisi form transaksi input pengunjung anak invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("a");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 10
describe("render website link-contact", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.contains("Book Now").click();
    });
});

//test 11
describe("mengisi form transaksi input pengunjung anak 0", () => {
    it("passes", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("Anjani Dwilestari");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("0");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});

//test 12
describe("mengisi form transaksi input nama lengkap invalid", () => {
    it("failed", () => {
        cy.visit("http://127.0.0.1:8000/transaksi");
        cy.findByPlaceholderText("Nama Lengkap").type("~!@#$%^&*()_+");
        cy.findByPlaceholderText("No Identitas").type("3575030000000000");
        cy.findByPlaceholderText("No. HP").type("085231404775");
        cy.get("select").select("Masjid Putih").should("have.value", "3");
        cy.findByPlaceholderText("Tanggal Kunjungan").type("2022-11-22");
        cy.findByPlaceholderText("Pengunjung Dewasa").type("3");
        cy.findByPlaceholderText("Pengunjung Anak-Anak").type("3");
        cy.findByPlaceholderText("Harga Tiket").type("30000");
        cy.contains("Pesan Tiket").click();
        cy.contains("OK").click();
        cy.contains("Lihat History").click();
        cy.contains("Lihat Detail").click();
    });
});
