import os

ROOT = "."

for root, dirs, files in os.walk(ROOT):
        for file in files:
                if file.endswith('.json'):
                    path = os.path.join(root, file)

                    with open(path, "r", encoding="utf-8") as f:
                        content = f.read()

                    if '"weight":' in content:
                        new_content = content.replace('"weight":', '"gravity":')

                        with open(path, "w", encoding="utf-8") as f:
                            f.write(new_content)

                        print(f"Updated: {path}")