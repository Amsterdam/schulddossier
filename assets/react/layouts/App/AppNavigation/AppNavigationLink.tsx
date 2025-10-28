/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import { type AnchorHTMLAttributes, type ForwardedRef, forwardRef, type PropsWithChildren } from "react";

import { Icon, type IconProps } from "@amsterdam/design-system-react";
import clsx from "clsx";

export type AppNavigationLinkProps = {
  readonly active?: boolean
  readonly icon?: IconProps["svg"]
  readonly label: string
} & PropsWithChildren<AnchorHTMLAttributes<HTMLAnchorElement>>;

export const AppNavigationLink = forwardRef(
  (
    { active, children, className, icon, label, ...restProps }: AppNavigationLinkProps,
    ref: ForwardedRef<HTMLAnchorElement>,
  ) => {
    return (
      <li className="ams-app-navigation__item">
        <a
          {...restProps}
          ref={ref}
          className={clsx(
            "ams-app-navigation__link",
            active && "ams-app-navigation__link--active",
            className,
          )}
        >
          {icon && <Icon size="large" svg={icon} />}
          <span className="ams-app-navigation__link-label">{label}</span>
        </a>
        {children}
      </li>
    );
  },
);

AppNavigationLink.displayName = "AppNavigation.Link";
