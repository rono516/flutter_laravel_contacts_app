class Contact {
  String? id;
  String? contactEmail;
  bool isActive;

  Contact({
    required this.id,
    required this.contactEmail,
    this.isActive = false,
  });

  static List<Contact> contactList() {
    return [
      Contact(id: '01', contactEmail: 'test1@gmail.com'),
      Contact(
        id: '02',
        contactEmail: 'test2@gmail.com',
      ),
      Contact(
        id: '03',
        contactEmail: 'test3@gmail.com',
      ),
    ];
  }
}
