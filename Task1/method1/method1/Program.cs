using System;

namespace method1
{
    class Program
    {
        //Kullanıcıdan rakamları tek tek alıp toplamı hesaplama
        static void Main(string[] args)
        {
            int a, sum = 0;
            for (int i = 1; i <= 11; i++)
            {
                Console.WriteLine("Rakamları sırayla giriniz:");
                a = Convert.ToInt32(Console.ReadLine());
                sum += a;

            }
            Console.WriteLine("Toplam= " + sum);
        }
    }
}
