public class Test1 {

    public static void main(String[] args) {
        String s = null;
        System.out.println(s.length()); // NP_NULL_ON_SOME_PATH

        if (true) {
            int x = 1;
        } else {
            int x = 2; // PMD: AvoidDuplicateLiterals
        }
    }
}
